#!/bin/bash

#testando diferencas

for f in $(ls website/fotos/); do
    BN=$(basename $f .jpg)
    exiv2 -ex -e X website/fotos/$f
    mv website/fotos/${BN}.xmp meta-fotos/
    xsltproc extract-rdf.xsl meta-fotos/${BN}.xmp > meta-fotos/${BN}.rdf
done
