rm -rf BRiDGEIrisPortal
git clone https://github.com/BRiDGEIris/BRiDGEIrisPortal
. ../env_conf.sh
sed -i bak -e "s|BASE_URL_GVR|$BASE_URL_GVR|g" BRiDGEIrisPortal/BrideIRISportalsite/index.php
sed -i bak -e "s|BASE_URL_CLINIPHENOME|$BASE_URL_CLINIPHENOME|g" BRiDGEIrisPortal/BrideIRISportalsite/index.php
sed -i bak -e "s|BASE_URL_DIDA|$BASE_URL_DIDA|g" BRiDGEIrisPortal/BrideIRISportalsite/index.php

docker build -t portal .
