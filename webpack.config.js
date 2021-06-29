const path = require('path')

module.exports = {
    entry: { 
        index: path.resolve(__dirname, "src", "app.js") 
    },
    output: {
        path: path.resolve(__dirname, "build"),
        filename: "app.js"
    },
    watch: true
}