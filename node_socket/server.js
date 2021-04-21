const app = require('express')()
const path = require('path')
const http = require('http').createServer(app)
const io = require('socket.io')(http)

const port = 3000

app.get('/', (req, res) =>{
    res.sendFile(path.join(__dirname,'index.html'))
})

io.on('connection', (socket)=>{
    console.log('...detetada uma nova conexão socketID:', socket.id)

    socket.on('msg',(msg)=>{
        console.log(msg)
        socket.broadcast.emit('msg',msg)
    })
})

http.listen(port, ()=>{
    console.log('serviço HTTP a correr na porta '+ port)
})
