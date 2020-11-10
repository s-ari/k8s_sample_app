# Blue Green Application for TEST.

docker build -t arimas/blue_green -f image/Dockerfile .
docker push arimas/blue_green:latest
k apply -k manifest/

