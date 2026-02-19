# Organização de arquivos locais

Este diretório documenta o uso da pasta `materiais-locais/` na raiz do projeto.

## Objetivo

A pasta `materiais-locais/` é destinada a arquivos de apoio que **não** devem ser versionados no GitHub, como:

- catálogos em PDF
- imagens temporárias de referência
- comprovantes e capturas auxiliares

## Regra atual de versionamento

O arquivo `.gitignore` contém:

```gitignore
materiais-locais/
```

Isso significa que todo conteúdo dentro de `materiais-locais/` fica apenas no ambiente local.

## Boas práticas

- Mantenha somente materiais temporários nessa pasta.
- Não coloque arquivos necessários ao funcionamento do site em `materiais-locais/`.
- Se algum arquivo precisar ir para produção, mova para uma pasta versionada (ex.: `assets/`) antes do commit.
