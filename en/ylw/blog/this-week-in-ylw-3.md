# This week in ylw 3

A (very) productive week
====

This week has seen many changes. With over 50 commits in the last week, this
might be the most productive week for ylw, since I began working on it a few
weeks ago. So, let's not delay this any further and let me present to you all
of the changes that happened to ylw last week.

## Things I did this week:

### Value<T>

A new abstraction for dealing with references. YlwType::Ref will be deprecated
and instead replaced by a second enum with the subtypes Data(YlwType),
Ref(isize) and Take(isize). Take is a new kind of pointer that *steals*  or 
consumes data from the stack instead of cloning, like Ref. 

### Display and FromStr

I've implemented Display and FromStr for most types in libylw::types and for
some types in libylw::vm::ops. This will improve error handling and debugging.

### New operators

remi, remf, setf and getf and typeof are the new operators this week. remi and
remf are your regular remained operators. setf and getf are used for setting
and getting of fields and indexed elements in arrays, structs and pseudo-structs.

### Classes

I've added type classes, although they're not much of use as of now. Classes
are a combination of Haskell type classes and Rust traits.

### Closure

Closure semantics have changed. Now instead of having a stupid program stack,
closures are now pushed at the end of the program vector and removed once
they've finished execution.

### libcore

I've added a new libcore module, which acts as a super-charged std-library.
It's basically a part of the ylw std library, but implemented in Rust for extra
performance. Currently the only implemented module is core/array, which has
some functions for working with arrays, like map, filter, etc.

### Benchmark

I've written some benchmark tests to measure the performance of ylw. I've come
to the conclusions that ylw is fast as hell. Seriously, it's pretty fast. A noop
is ~8ns on my machine, an integer addition is ~20ns and a float addition is
~12-15ns. So on my machine, ylw reaches around 70MFLOPS, which should be enough
to run Quake. (For comparison, a modern CPU adds numbers in way less than 1ns.)

## Things I'm working on:
### mlr

Today I've written the backbone for the mlr compiler, which will be the second
compilation stage. It's not functional yet.

### meta-macro

still *wip*
