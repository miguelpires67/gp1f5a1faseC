#!/bin/bash
ver=$(cat /var/lib/jenkins/workspace/gp1f5act14/README | grep "Versió:" | cut -d " " -f 2)
echo $ver
ver_ant=$(cat /var/lib/jenkins/workspace/gp1f5act14/README | grep "Versio anterior:" | cut -d " " -f 3)
echo $ver_ant
ssh vagrant@producciogp1f5 mkdir -p projectes/gp1f5act14/$ver
scp -r /var/lib/jenkins/workspace/gp1f5act14 vagrant@producciogp1f5:~/projectes/gp1f5act14/$ver
if [[ ! -z $ver_ant ]]
then
 comprova=$(ssh vagrant@producciogp1f5 ls /home/vagrant/projectes/gp1f5act14 | grep $ver_ant)
 if [[ $comprova != "" ]]
 then
  ssh vagrant@producciogp1f5 docker-compose -f /home/vagrant/projectes/gp1f5act14/$ver_ant/gp1f5act14/docker-compose.yml down
 fi
fi
ssh vagrant@producciogp1f5 docker-compose -f /home/vagrant/projectes/gp1f5act14/$ver/gp1f5act14/docker-compose.yml up -d
exit 0