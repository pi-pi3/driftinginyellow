# ylw lang

A data processing and generating language
====

## What is ylw lang?

ylw (pronounced 'yellow') is a modern functional language designed by me
specifically for embeddability as a library (`libylw`) or a seperate program as
an interpreter (`ylwi`). This post explains the syntax, semantics and some inner
functionalities of the WIP mainstream implementation.

## Purpose

ylw can be used to generate and process large amounts of data effectively and
with ease. We've all seen wonderful languages like Lisp or Haskell that are
meant to do large amounts of calculations in an easy to read and write manner.
But as aforementioned, ylw is meant to be embedded. For people who have
experience in structured programming it might be difficult to implement even
a trivial algorithm in Haskell. Consider the following implementation of
`quick sort` in Haskell.

```
qsort :: Ord a => [a] -> [a]
qsort []     = []
qsort (x:xs) = qsort lower ++ (x : qsort larger)
    where
        lower  = [y | y <- xs, y <= x]
        larger = [y | y <- xs, y > x]
```

This is trivial for anyone with experience in Haskell. Some pythonic enthusiasts
might understand the list comprehension. Rustaceans would understand that code
if it was rewritten with filters or might even understand it as it is. But the
general form won't be understood by anyone who's only ever used C/C++ or Python.
As mentioned before, ylw is a purely functional language, but it has the
characteristics of a structured language. Before we go on to `quick sort` in
ylw, let's go over how it would look in Lisp.

```
(defun qsort (vec l r)
  (let ((i l)
        (j r)
        (p (svref vec (round (+ l r) 2))))
    (while (< = i j)
      (while (< (svref vec i) p) (incf i))
      (while (> (svref vec j) p) (decf j))
      (when (< = i j)
        (rotatef (svref vec i) (svref vec j))
        (incf i)
        (decf j)))
    (if (> (- j l) 1) (qsort vec l j))
    (if (> (- r i) 1) (qsort vec i r)))
  vec)
```

Woah! That escalated quickly. This is black magic to anyone who's never dealt
with functional programming. Now let's compare it will ylw.

Disclaimer: ylw is still in a very early stage of development as of now, so this
example might now be valid in a few weeks. I will try to update it whenever 
it's not valid or a better implementation is possible.

```
qsort :: mut [T] => [T]
qsort v = {
    if empty v {
        []
    } else {
        x := first &v
        lower := filter |a. a <= x.| v
        larger := filter |a. a > x.| v
        qsort lower ++ [x] ++ qsort larger
    }
}
```

The first line is known as a type signature. It tells the compiler/interpreter
what type the function is. Although ylw is statically typed, functions are
dynamically typed as of writing this article. (This function was written with
a block as the main function body. Blocks are also expressions in ylw, and a
function can be defined without one, e.g. like this `f x = x + 5`). As you can
see, there's an `if .. else` statement, or rather and `if .. else` expression
which is rather self explanatory. If the argument is empty, we return an empty
list. Else we sort it. the `var := expr` statement is a bind operator. No type
had to be defined, because ylw has type inference. `first` has the type
signature `first :: &mut [T] -> T`, so x has the type of whatever was inside
the array. 

Now you're probably wondering what `mut` means. It means what it
says. By default all variables are immutable in ylw. This means you can't
assign a new value to a variable you've declared before. If you want to mutate
a value, i.e. change the value at its position, it has to be declared with a
mutable type. Mutable types are declared like normal types, but with a `mut`
keyword in front of them, i.e. `mut Integer`. So why was `first` defined with
a `mut` type? `first` is a function that takes a reference to an array and 
removes its first element, which is then returned. `first` has to use a
reference, because it mutates a value that's already existant. `qsort` on the
other hand also has a `mut`able argument, but it's passed by copy, meaning the
original argument that was passed to the function will be preserved unmodified.

One last thing you might be wondering about is the `|a. a <= x.|` part. This is
known as a closure. It's an anonymous function that inherits its environment.
In this case it has one argument `a` and it returns a boolean value based on
the ordering of a and x.  Remember, x is the first element of the input
argument of `qsort`. 

As you can see, although ylw is a functional language, it behaves like a
structured procedural language. And this is the purpose of ylw. To be a
functional language designed for programmers to embed in their procedural-style
code to easily process and generate data. A feat that is often over-complicated
and over-verbose in low-level languages like C, C++, Rust. It also gives a
purpose to functional programming in the big world of programming.  Functional
languages are under-used in the big world, where C/C++ and Java (sigh) still
rule the world.

## Implementation

Okay, that's enough reasoning about the uses of ylw. What about the
implementation?

The mainstream implementation is being worked on by me. It's written in 100%
Rust, but a C interface will be provided. The underlying virtual machine is
already functional and hase the core functionality already working at the point
of writing the article. You can view the source code and progress on
[github](https://github.com/pi-pi3/ylw). If you have any ideas or issues with
the design, feel free to make an issue. The development is still at a very early
stage, so pull requests won't be accepted as of now.

There are no clear plans about native compilation now, but I would love to port
ylw to LLVM one day.

## Features

To end off the article, here's a contemporary list of features in ylw. Those
marked with a star are already implemented in the VM.

- data stack\*
- variables\*
- functions\*
- flow control\*
- first-class functions\*
- closures\*
- references\*
- pointers\*
   Those two differ in the VM, but only references are available to the
   programmer.
- first-class URI!\*
   This will be explained in a later article.
- meta-macro
   This will be explained in a later article, as soon as I have a working
   version.
- monads
- bindings
- strongly typed variables
- mutability
- typed functions
- type generics
- Rust-like traits
- user-defined types
   Records (structs) and enums (with data!) are planned.

- ylwi, the (interactive) interpreter
- ylwc, the compiler (ylw-bytecode only)
- ylwdoc, to generate documentations from program

