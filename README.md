# xalculator

xalculator is a command line calculator for coders and hackers.
You can input arbitrary PHP expressions.
In response, the calculator prints out the result in decimal, hexadecimal, binary, and octal notation, if the result was an integer. Otherwise, it prints as is.

## Installation
You already know how. If not, you are not a coder/hacker.

## Usage
For example:
```php
:X:> pow(2, 8)
```
> D:                  256 H: 0000000000000100 B: 0000000000000000000000000000000000000000000000000000000100000000 O: 0000000000000000000400

You can assign the result to your own variable.
```php
:X:> $var = pow(2, 8)
```

But there is a default variable - **$ans**, which contains the recent output.
```php
:X:> 35 + 11
:X:> $ans + 1
:X:> $ans / 2
...
```
