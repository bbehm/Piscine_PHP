## Object Oriented Programming

Object oriented programming is about creating objects that contain both data and functions.

## Subject requirements
- For these exercises, each class must have documentation for the user on how to use the class.
- A class must ALWAYS have a static method called doc that returns the documentation in a string.
- A class must ALWAYS have a static Boolean attribute called verbose activating the display of useful information for debugging and defence.
- The submission of each exercise must also contain a copy of the files created in previous exercises.

---

- __PHP_EOL__: This Predefined constant is used as a representation of the end of the line.
- __'::'__ [scope resolution operator](https://www.php.net/manual/en/language.oop5.paamayim-nekudotayim.php)
- __self operator__: represents the current class and thus is used to access class variables or static variables
- '>>' and '&': Bitwise operators used for the shifting of colors. '>>' is bitwise rightshift and '&' is bitwise and.
- __$this__: [the this keyword](https://tutorials.supunkavinda.blog/php/oop-this#:~:text=%24this%20refers%20to%20the%20current,object%20of%20the%20current%20method.) refers to the object of the current method

---

### Methods, Objects and Classes

The class is the actual template for the objects and an object is an instance of a class. Objects are created using the `new` keyword. The $this keyword refers to current object and is only available inside methods.

### Constructor and destructor

The constructor allows you to initialize the properties of an object upon creation. If you include a `__construct()` function PHP will automatically call this function when you create an object from a class.

The `__destruct()` function works the same but is called at the end of the script.

### Private and public

Both properties and methods can have __access modifiers__. They control where they can be accessed.
- `public` - default, can be accessed from everywhere
- `protected` - can be accessed within class and within classes derived from that class
- `private` - can only be accessed within the class

---

### Tips for testing

1. Run the main_XX.php into output into a file - Eg. `php main_00.php > my_output.txt`.
2. Compare `my_output.txt` with the given sample output `main_00.out` - `diff my_output.txt main_00.out`

