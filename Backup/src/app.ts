//src/app.ts

import express, { Application } from 'express';
import bodyParser from 'body-parser'; // Necessário para poder converter o Json recebido em obj typescript
import cors from 'cors';
import { Controller } from './main.controller';
import mongoose from 'mongoose';
import { MONGO_URL } from './constants/backup.constants' // Endereço do Mongo

class App {
  public app: Application;
  public backupController: Controller;

  constructor() {
    this.app = express();
    this.setConfig();
    this.setMongoConfig();

    //Instancia o controller para poder definir as rotas
    this.backupController = new Controller(this.app);
  }

  //Define as configurações para o bodyParser e para o Mongo
  private setConfig() {
    this.app.use(bodyParser.json({ limit: '50mb' }));
    this.app.use(bodyParser.urlencoded({ limit: '50mb', extended:true}));
    this.app.use(cors());
  }

  private setMongoConfig() {
    mongoose.Promise = global.Promise;
    mongoose.connect(MONGO_URL, {
      useNewUrlParser: true
    })
  }
}

export default new App().app;
