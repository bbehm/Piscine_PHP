## PHP Inheritance and Interfaces

### Class Inheritance
Inheritance in OOP means when a class derives from another class.

- A __child__ class will inherit all the public and protected properties and methods from the __parent__ class. The child can also have its own properties and methods.
- An inherited class is defined by the `extends` keyword.
- Inherited methods can be __overridden__ by redifining the methods --> using the same name in the child class.
- If you use the `final` keyword, you can't extend the class.

### Abstract Classes and Methods

This is when a parent class has a named method but needs its child to fill out the tasks. If a class has at least one abstract method, the class is declared as abstract. Abstract classes and methods are defined using the keyword `abstract`.

### Interfaces

Interfaces are similar to abstract classes and are declared with the `interface` keyword. Interfaces cannot have properties and all interface methods must be public. All methods in an interface are abstract (no code implemented within the interface) so they don't need to be declared as `abstract`.

### Useful Functions
- __get_class()__ - returns the name of the class of an object
- __get_parent_class()__ - retrieves the parent class name for an object or class
