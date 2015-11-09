---
title: "Docker container configuration: BRiDGEIris Portal"
output: html_document
---

### Files

* portal.conf: Configuration variables
* Dockerfile: script for creating Docker container
* build.sh: Builds the container

### Create container

run

```
(sudo) build.sh
```

This creates a container named 'portal'

### Start container

run

```
(sudo) docker run -p 80:80 -it portal
```

### Connect from Browser

On Linux, CliniPhenome is accessible at http://127.0.0.1

If on Mac or Windows, check IP of VM with 

```
docker-machine ls
```


