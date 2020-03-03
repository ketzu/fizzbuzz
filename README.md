# FABI: A FizzBuzz JSON API

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

### Benchmark

We benchmarked FABI using the amazing [api-benchmark](https://github.com/matteofigus/api-benchmark) node package!

You can find our [benchmark script](/benchmark/bench.js) in the [benchmark directory](/benchmark).
And the (cleaned up for filesize) [result](/benchmark/benchmarks.html), too.

The result for `/to/100000` looks as follows:

![Benchmark of /to/100000](/benchmark/to100000.png)

The benchmark also contains a distribution of the response times:

![Benchmark of /to/100000 as distribution](/benchmark/to100000dist.png)

### Docker

FABI is available as a docker container [through docker-hub](https://hub.docker.com/r/ketzu/fabi) as ```ketzu/fabi```.

### OpenAPI and Swaggerhub

You can find the FABI example API on [swaggerhub](https://app.swaggerhub.com/apis/ketzu/FABI/1.0).

The created description, that can be amended easily for your own version is included in our [openapi.yml](openapi.yml).

```yaml
openapi: 3.0.1
info:
  title: "FABI: A FizzBuzz API"
  description: Returns FizzBuzz Values in JSON Format.
  version: "1.0"
servers:
  - url: 'http://fizzbuzz.ketzu.net'
paths:
  /to/{targetNumber}:
    get:
      description: Get all FizzBuzz Values up to (including) targetNumber
      parameters:
        - in: path
          name: targetNumber
          schema:
            type: integer
          required: true
          description: Maximum Number to include in the reqeuested FizzBuzz list
      responses:
        '200':
          description: JSON Array of Numbers and Strings of either "Fizz", "Buzz" or "FizzBuzz"
          content:
            application/json:
              schema:
                type: array
                items: object
                properties: {}
      servers:
        - url: 'http://fizzbuzz.ketzu.net'
    servers:
      - url: 'http://fizzbuzz.ketzu.net'
  /{targetNumber}:
    get:
      description: Get the FizzBuzz Values of targetNumber
      parameters:
        - in: path
          name: targetNumber
          schema:
            type: integer
          required: true
          description: Number to determin the FizzBuzz value of
      responses:
        '200':
          description: Single Value String "Fizz", "Buzz", "FizzBuzz" or Number
          content:
            application/json:
              schema:
                type: object
                properties: {}
              examples:
                '0':
                  value: '"23"'
      servers:
        - url: 'http://fizzbuzz.ketzu.net'
    servers:
      - url: 'http://fizzbuzz.ketzu.net'
```

### License

Feel free to use this project in any commercial application you might have for a free FizzBuzz API!

It's public under the [MIT license](LICENSE).
