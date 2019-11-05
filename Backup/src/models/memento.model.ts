import { MongooseDocument } from "mongoose";

export class Memento {
    status: MongooseDocument;

    constructor(backup: MongooseDocument){
        this.status = backup;
    }

    public getStatus(){
        return this.status;
    }

    public setStatus(backup: MongooseDocument){
        this.status = backup;
    }
}