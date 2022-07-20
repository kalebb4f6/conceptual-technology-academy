## DOCKER 


#### Instalação (LINUX ubuntu)

 - apt install docker.io docker-compose
 - sudo systemctl enable --now docker docker.socket containerd  
   

 **[Usar docker sem ser sudo](https://docs.docker.com/engine/install/linux-postinstall/)**

#### Comandos basicos

 - docker --help
 - docker ps 
 - docker pull
 - docker run
 - docker rm 
 - docker rmi
 - docker system prune

**TOMAR CUIDADO COM . E --file:**
 - . significa o contexto que o docker vai rodar o build
 - --file o arquivo que é o Dockerfile se nao existir --file ele vai pesquisar por Dockerfile se for outro nome adiciona --file
 Exemplo: 
    docker build --tag passaros_exoticos:latest .

#### Construção do arquivo Dockerfile

```sh
FROM nginx:1.23
# declara imagem

    RUN echo "iniciando essa cacetinha do nginx" 
    # Rodar comandos 
    # Qual Comando ?
    # caguei, o q for comando roda ai, 
    # a n ser q tenha q instalar algum pacote,
    # adivinha, instala o pacote e depois roda o comando
    COPY default.conf /etc/nginx/conf.d/default.conf 
    # Copia arquivos do teu local para dentro da imagem
    
    EXPOSE 80
    # Expoe a porta do serviço
    # Vai precisar igual adicionar no comando o -p do comando docker run
    # build exemplo: docker build --tag passaros_exoticos:latest
    # exemplo: docker run --name caralhobelga -p 8080:8000 passaros_exoticos:latest
    CMD ["nginx", "-g", "daemon off;"] 
    
```