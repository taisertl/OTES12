import { MongooseDocument } from "mongoose";
import { Memento } from '../../models/memento.model';

export class MementoMaker {
    public criarMemento(backup: MongooseDocument): Memento{
        return new Memento(backup);
    }
}