CREATE TABLE  IF NOT EXISTS cliente (client_id SERIAL PRIMARY KEY, 
                                    name TEXT NOT NULL, 
                                    email TEXT NOT NULL,
                                    role TEXT,
                                    passwd TEXT);

CREATE TABLE IF NOT EXISTS producto (product_id SERIAL PRIMARY KEY, 
                                    name TEXT NOT NULL,
                                    price FLOAT NOT NULL,
                                    foto_url TEXT);
                                    
CREATE TABLE IF NOT EXISTS compra (item_id SERIAL PRIMARY KEY,
                                    client_id INT,
                                    product_id INT,
                                    date_c DATE,
                                    CONSTRAINT ca_client_id FOREIGN KEY (client_id) REFERENCES cliente(client_id),
                                    CONSTRAINT ca_product_id FOREIGN KEY (product_id) REFERENCES producto(product_id));