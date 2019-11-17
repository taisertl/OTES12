import { MongooseDocument } from "mongoose";
import { Memento } from '../../models/memento.model';
import { MementoMaker } from './memento.maker';
import { Backup } from "../../models/backup.model";
import { BACKUP_NOT_FOUND } from "../../constants/backup.constants";

export class MementoController {
    listaMementos: Array<Memento>;
    mementoMaker: MementoMaker;
    //Padrão Singleton, apenas uma instância do objeto
    static instance: MementoController;

    constructor(){
        this.listaMementos = new Array<Memento>();
        this.mementoMaker = new MementoMaker();
    }

    public getMementos(){
        return this.listaMementos;
    }

    public getMemento(index: number){
        return this.listaMementos[index];
    }

    public addMemento(backup: MongooseDocument){
        const memento = this.mementoMaker.criarMemento(backup);
        this.listaMementos.push(memento);
        return memento;
    }

    public remMemento(index: number){
        const ITENS_TO_REMOVE = 1;
        this.listaMementos.splice(index, ITENS_TO_REMOVE);
    }

    public saveMemento(backupID: String){
        let backupObj;
        Backup.findById(backupID, (error: Error, backup: any) => {
            if (error) {
                return error;
            }
            if (backup) {
                this.addMemento(backup);
            }
            return BACKUP_NOT_FOUND;
        });
    }

    //padrão Singleton
    static getInstance(): MementoController {
        if (!MementoController.instance) {
            MementoController.instance = new MementoController();
        }

        return MementoController.instance;
    }
}
