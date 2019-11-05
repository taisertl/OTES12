//Inicia a aplicação e começa a escutar

import app from "./app";
import { PORT } from "./constants/backup.constants";

app.listen(PORT, () => console.log(`Listening on port ${PORT}`));
