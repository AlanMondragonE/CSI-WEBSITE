//Esta es la conexión con typesense

const client = new Typesense.Client({
    nodes: [{
        host: '5jh43k7egioprt62p-1.a1.typesense.net',
        port: '443',
        protocol: 'https'
    }],
    apiKey: '0ViUkPXxuW60M4CYknoPDDZFTaRhqept',
    connectionTimeoutSeconds: 2
});

//Esta es la colección que establecemos que es el patron como si fuera nuestra Data Base

let opportunitiesSchema = {
    'name': 'opportunities',
    'fields': [
        { 'name': 'name', 'type': 'string' },
        { 'name': 'email', 'type': 'string', 'facet': true },
        { 'name': 'phone', 'type': 'int32', 'facet': true },
        { 'name': 'industry', 'type': 'string', facet: true },
        { 'name': 'company', 'type': 'string' },
        { 'name': 'date', type: 'string' }
    ],
    default_sorting_field: 'date', 
    default_sorting_order: 'desc' 
}

console.log(opportunitiesSchema.fields)

client.collections().create(booksSchema)
    .then(function (data) {
        console.log(data)
})




