FROM php:7

COPY build/id_rsa /root/.ssh/id_rsa

WORKDIR /app
RUN apt update && apt install -y openssh-server wget git zip

CMD ["tail", "-f", "/dev/null"]