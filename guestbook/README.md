# guestbook

---

Guest book is well known sample application for kubernetes.  
This kubernetes manifest was changed to use following resources.

- Create namespace
- Use LoadBalancer in frontend-service.yaml

## Deploy and Delete

This manifest files use kustomize when application deploy.

```
kubectl apply -k guestbook

kubectl get pod -n guestbook
kubectl get svc -n guestbook

kubectl delete -k guestbook
```
