---
title: "Docker container configuration: BRiDGEIris Portal"
output: html_document
---

### Files

* Dockerfile: script for creating Docker container
* build.sh: Builds the container

### Create container

run

```
(sudo) build.sh
```

This creates a container named 'bridgeirisportal'

### Start container

run

```
(sudo) docker run -p 81:80 -it bridgeirisportal
```

### Connect from Browser

On Linux, BridgeIris portal is accessible at http://192.168.99.100/ 
On Windows, BridgeIris portal is accessible at http://localhost/ 
If on Mac or Windows, check IP of VM with 

```
docker-machine ls
```


