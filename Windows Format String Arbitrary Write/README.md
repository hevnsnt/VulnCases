# Windows Format String Arbitrary Write

This is an example of a format string vulnerability for Windows. The code is written in a way
that allows you to easily overwrite an object's state. Technically, you can use this example
to do other format string attacks too (such as reading a pointer on the stack), too.

Note: Make sure you disable GS, otherwise you can only read stuff from the stack, not write.