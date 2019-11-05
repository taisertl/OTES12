import { Application } from 'express';

export interface ICommand {
    execute(app: Application): void;
}