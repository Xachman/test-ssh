FROM ubuntu:trusty

COPY ./entrypoint.sh /entrypoint.sh

RUN chmod +x /entrypoint.sh

ENTRYPOINT '/entrypoint.sh'

COPY ./build/id_rsa.pub /root/.ssh/authorized_keys

run apt update && apt install -y openssh-server

CMD ["tail",  "-f", "/dev/null"]