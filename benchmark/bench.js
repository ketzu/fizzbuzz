let apiBench = require('api-benchmark');

let service = {
    'ketzu.net': 'http://fizzbuzz.ketzu.net'
};

let routes = {
    'to/15': {
        method: 'get',
        route: 'to/15'
    },
    '15': {
        method: 'get',
        route: "15"
    },
    'to/1000': {
        method: 'get',
        route: 'to/1000'
    },
    '1000': {
        method: 'get',
        route: "1000"
    },
    '1001': {
        method: 'get',
        route: "1001"
    },
    '1002': {
        method: 'get',
        route: "1002"
    },
    'to/100000': {
        method: 'get',
        route: 'to/100000'
    },
    '100000': {
        method: 'get',
        route: "100000"
    },
};

let fs = require('fs');

apiBench.measure(service, routes, function(err, results){
    apiBench.getHtml(results, function(error, html){
        fs.writeFileSync('benchmarks.html', html);
    });
});
