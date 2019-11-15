# thewp
> Estrutura WordPress para desenvolvimento de sites.

Contém estrutura com organização para sites em WordPress, dividindo core e content.

## Montagem da estrutura

```sh
# Clonar repositório 
git clone --recursive git@github.com:theandersonn/thewp.git <meu-projeto>

# Acessar o projeto clonado
cd <meu-projeto>

# Certifique-se que os sub módulos estão atualizados 
git submodule foreach git pull origin master

# Remova o diretório .git e o arquivo .gitmodules
rm -rf .git && rm .gitmodules

# Iniciar repositório
git init

# Adicionar remote
git remote add origin <url-projeto>

# Renomear a pasta WordPress
mv WordPress cms

# Remover a pasta wp-content
rm -rf cms/wp-content
```

## Estrutura
```sh
├── cms
│   └── WordPress/
├── content
│   ├── languages/
│   ├── plugins/
│   └── themes/
│
├── .gitignore
├── index.php
├── local-config.php
├── wp-config.php
├── LICENSE.md
└── README.md
```

## Configuração WordPress
- Crie o banco de dados
- Configure o arquivo local-config.php

## Baixar dependencias do tema thepress

```sh
# Instala as dependencias
npm install

# Processa scss / Concatena JS ES6+
npm start
```

## Dúvidas / Sugestões
Abra [issues](https://github.com/theandersonn/thewp/issues/new) e poste suas dúvidas ou sugestões de melhorias.

## License
[MIT](https://github.com/theandersonn/thewp/blob/master/LICENSE.md) © [Anderson Nascimento](https://github.com/theandersonn)