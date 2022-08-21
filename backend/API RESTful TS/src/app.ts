// ENV variables:
require("dotenv").config();

import express from "express";
import config from "config";

const app = express();

// JSON Middleware:
app.use(express.json());

// DB:
import db from "../config/db";

// Middlewares:
import morganMiddleware from "./middleware/morganMiddleware";
app.use(morganMiddleware);

// Routes:
import router from "./router";
app.use("/api/", router);

// Logger:
import Logger from "../config/logger";

// App PORT:
const port = config.get<number>("port");

app.listen(3000, async () => {
  await db();
  Logger.info(`Server is listen on port: ${port}`);
});
