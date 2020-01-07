# sample-ginx

---
This smple application use Log Service of Alibaba Cloud in deployment.yaml.  
If you will use this manifest file you have to add <LOG_STORE_NAME> after create log store in Log Service of Alibaba Cloud.  
Please see documentation about log service of Alibaba Cloud.  
https://jp.alibabacloud.com/help/doc-detail/87540.htm

```
apiVersion: apps/v1
kind: Deployment
metadata:
  labels:
    run: nginx
  name: nginx
spec:
  replicas: 1
  selector:
    matchLabels:
      run: nginx
  template:
    metadata:
      labels:
        run: nginx
    spec:
      containers:
      - image: nginx
        name: nginx
        env:
        # Alibaba Cloud Log Service Settings [aliyun_logs_<LOG_STORE_NAME>].
        - name: aliyun_logs_
          value: stdout
```

## Deploy and Delete

This manifes files use kustomize when application deploy.

```
# Edit frontend-deployment.yaml.
export LOG_STORE=<your_log_store_name>
sed -i -e "s/aliyun_logs_/aliyun_logs_${LOG_STORE}/g" deployment.yaml 

kubectl apply -k ../sample-nginx

kubectl get pods -n sample-nginx
kubectl get svc -n sample-nginx

kubectl delete -k ../sample-nginx
```
