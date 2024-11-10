#!/bin/bash
./wait_for_it.sh -h $DB_HOST -p $MYSQL_PORT -t 30 -s && {
    mysql --password="$MYSQL_ROOT_PASSWORD" --execute="GRANT ALL PRIVILEGES ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%';
    "

    mysql --user="$MYSQL_USER" --password="$MYSQL_PASSWORD" --execute="CONNECT $MYSQL_DATABASE;

    CREATE TABLE calon_siswa (
        id INT NOT NULL AUTO_INCREMENT,  
        nama VARCHAR(64) NOT NULL,  
        alamat VARCHAR(255) NOT NULL,  
        jenis_kelamin VARCHAR(16) NOT NULL,  
        agama VARCHAR(16) NOT NULL,  
        sekolah_asal VARCHAR(64) NOT NULL,
        PRIMARY KEY (id)
    );

    SHOW TABLES;
    "
}