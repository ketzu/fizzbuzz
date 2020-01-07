# FizzBuzz API

Do you think modulo is an unfair burden to your CPU?
Do you prefer JSON APIs over complicated thinking?
Were you asked to implement FizzBuzz?

This is the solution for you!

### Usage

Call `/exact.php?fb=15` or (with support for rewrite rules) use `/15` to receive the FizzBuzz value of 15.

Call `/to.php?fb=15` or (you know when) `/to/15` to receive a JSON response of all values up to (including) 15.

Try it on fizzbuzz.ketzu.net!

[Exact 15](http://fizzbuzz.ketzu.net/15). [Exact 100](http://fizzbuzz.ketzu.net/100).

[To 15](http://fizzbuzz.ketzu.net/to/15). [To 100](http://fizzbuzz.ketzu.net/to/100).

### Example Responses

Exact match 27:

```javascript
"Fizz"
```

To 20:

```javascript
[1,2,"Fizz",4,"Buzz","Fizz",7,8,"Fizz","Buzz",11,"Fizz",13,14,"FizzBuzz",16,17,"Fizz",19,"Buzz"]
```

### License

Feel free to use this project in any commercial application you might have for a free FizzBuzz API!

It's public under the [MIT license](LICENSE).
