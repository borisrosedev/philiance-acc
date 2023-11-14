#!/bin/bash
docker build -t image-shop-mysql-server .
docker run -p 3306:3306 --name shop-db-container -d image-shop-mysql-server