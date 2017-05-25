# This week in ylw 1

Everything has to start somewhere
====

Welcome to the first of many posts in a series about every little change and
and all the news in `ylw`!

Since this is the first week, there isn't much to tell nor much new in ylw.
Therefore I'll only list some of the things I've implemented this week and
explaining what issues are left yet.

## Things I did this week:
### Arbitrary size Integers

The first big change I made was last sunday, when I removed all of the
traditional Integer functionality and went through 3 or 4 bignum libraries
to find the one that would fit my needs. Now we have an arbitrary sized Integer
provided by the [num crate](https://crates.io/crates/num). The new Integer can
be freely converted to, from and mixed with the Real type, i.e. the 64-bit
floating point number. Do mind though, that there is a loss of precision when
converting between the two.

### (Some) Error handling

The vm won't panic anymore! Now it will gratuitously abort its operations and
tell what happened via a `std::result::Result`. This functionality hasn't yet
been added to the other modules, like the assembler or some functions in the
types module.

### User-defined types

Now it is finally possible to declare user types via the `decl` and `decle`
vm instructions. `decl` is used for declaring structs (typed or typeless)
and `decle` is used for declaring enums, which are just groupings of enumerated
structs. Structs can have zero or more fields and enums can have 1 or more
variants, or pseudo-types, as they will be called from now on. The syntax for
declaring structs looks like the following.

```
decl type://Foo (field type://Type) (another_field type://OtherType)  
decl type://Bar (field) (another_field)
```

And the syntax for declaring enums looks like this.

```
decle type://Foo (type://Foo/Bar (field type://Type) (type://Foo/Baz))
```

Do mind that those two are only valid for the ylw llr, the assembly-like form.
Declaring new types in ylw hlr, the high-level form, looks different.

### The first type outside of core: `type://std/Bool`

And the first enum to be implemented and the first non-built-in type is Bool,
a new type with a full name of `type://std/Bool`. It's, as the name suggests,
an enum used for boolean operations.

## Things I'm working on:
### Instantiating user-defined types

Even though structs and enums can already be declared, they can't be
instantiated yet. However, once it's done, the syntax will look like this.

```
# struct
type://Foo 1 2.0 "3"

# enum with a pseudo-type called Baz
type://Bar/Baz 1 2.0 "3"
```

This operation creates a new instance of a type and pushes it onto the data
stack. Do note that this call also be used with all the built-in types, like
`type://core/Integer 1` or `type://core/Null`.

### Improvements to first-class URI

I've started doing some work on the built-in URI type as well as writing a
better API support for it. Now it's even more omnipresent!

### meta-macro

I know I still haven't explained what it is, but bear with me. All I'll tell
for now is the core is somewhat functional at this point, but not yet usable.
