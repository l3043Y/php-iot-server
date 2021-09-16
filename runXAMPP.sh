#! /bin/bash
# docker run --name iot_XAMPP -p 41061:22 -p 41062:80 -d -v "$(pwd)"/codebase/public:/www  -v "$(pwd)"/docker/server/xampp_apache:/opt/lampp/apache2/conf.d tomsik68/xampp

docker run --name iot_XAMPP_default -p 41061:22 -p 41062:80 -d -v "$(pwd)"/codebase/public:/opt/lampp/htdocs tomsik68/xampp