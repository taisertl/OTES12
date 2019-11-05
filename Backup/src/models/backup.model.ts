import mongoose from "mongoose";

//Instancia um Schema no mongo
const BackupSchema = new mongoose.Schema({
    data: Date,
    tamanhoArquivo: Number,
    arquivo: Object
});

//exporta um obj referente ao Schema criado
export const Backup = mongoose.model("Backup", BackupSchema);
