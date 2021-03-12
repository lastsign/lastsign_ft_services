minikube start --vm-driver=virtualbox
minikube addons enable metallb

eval $(minikube docker-env)

docker build -t nginx_image srcs/nginx/
docker build -t wp_image srcs/wordpress/
docker build -t pma_image srcs/phpmyadmin/
docker build -t mysql_image srcs/mysql/
docker build -t nflx_image srcs/influxdb/
docker build -t grfn_image srcs/grafana/
docker build -t ftps_image srcs/ftps/

kubectl apply -f srcs/confml.yaml
kubectl apply -f srcs/nginx.yaml
kubectl apply -f srcs/wordpress.yaml
kubectl apply -f srcs/phpmyadmin.yaml
kubectl apply -f srcs/mysql.yaml
kubectl apply -f srcs/influxdb.yaml
kubectl apply -f srcs/grafana.yaml
kubectl apply -f srcs/ftps.yaml

minikube dashboard