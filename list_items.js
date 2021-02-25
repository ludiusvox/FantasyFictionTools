const mongoose = require('mongoose');
const Schema = mongoose.Schema;

const listSchema = Schema(
  {Action1: String,
  Background1: String,
  Climax1: String,
  Development1: String,
  Ending1: String,
  Action2: String,
  Background2: String,
  Climax2: String,
  Development2: String,
  Ending2: String,
  Action3: String,
  Background3: String,
  Climax3: String,
  Development3: String,
  Ending3: String
  });

const List = mongoose.model('items',listSchema);

module.exports = List;
