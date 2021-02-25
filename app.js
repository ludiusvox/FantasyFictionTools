var express= require('express');
var app = express();
var bodyParser = require('body-parser');
var mongoose = require('mongoose');
var List = require('./list_items.js');
var MongoClient = require('mongodb').MongoClient;
var url = "mongodb://localhost/MongoProject";

	
	
//Local promise to global promise
mongoose.Promise = global.Promise;
//Database connection establishing
mongoose.connect('mongodb://localhost/MongoProject',{useNewUrlParser: true});
mongoose.connection.once('open',()=>{
  console.log("Connection Succesful!");
}).on('error',(error)=>{
  console.log("Your error : "+ error);
});

var urlencodedParser = bodyParser.urlencoded({extended: false});

//setting view engine
app.set('view engine','ejs');

//getting the link and passing a page to that link
app.get('/',function(req,res){
  console.log(req.url);
  res.sendFile(__dirname+'/PlotSketches.html');
});
app.listen(3000);


//Post request
app.post('/list',urlencodedParser,function(req,res){
    console.log(req.body);
    items = req.body;

//Saving to database
    const newitem =  new List(items); //items is according to Schema
    console.log("Lets see what this step has ");
    newitem.save({ validateBeforeSave: false }).then(()=>{
        console.log("Value entered in database");

//Mongoclient connects with db again before CRUD operations!
        MongoClient.connect(url,{useNewUrlParser:true}, function(err, db) {
            if (err) throw err;
              var dbo = db.db("MongoProject");
console.log("Mongoclient connects with db again before CRUD operations!")
        //finding after saving the new item to db
            dbo.collection("items").aggregate({}).toArray(function(err,result) {
              
              if (err) throw err;

                  console.log("Fetched properly!!");
                  //passing to new webpage the items of database
                  res.render('list',{q:{s:result}})
                  db.close();
                 
           
                });
        });

  });


});
