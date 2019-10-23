package com.ertl.tais.Backup.dao;

import java.sql.Connection;

public interface Database {
    Connection getConnection();
}
