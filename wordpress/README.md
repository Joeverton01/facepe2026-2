# Design WordPress da Olympic School

O diretório `olympic-school/` contém um tema clássico WordPress. O design segue o PDF de referência: verde escuro, verde-lima, cartões translúcidos, página pública e interfaces de estudos e assistente.

## Instalação do tema

1. Em uma instalação WordPress que aceite temas próprios, envie `olympic-school-theme.zip` em **Aparência → Temas → Adicionar tema → Enviar tema** e ative **Olympic School**.
2. Crie e publique três páginas com os slugs `entrar`, `estudos` e `assistente`. Os arquivos `page-entrar.php`, `page-estudos.php` e `page-assistente.php` serão usados automaticamente pelos slugs. Também é possível selecionar os modelos com esses nomes no editor.
3. Defina **Uma página estática** em **Configurações → Leitura**. Crie uma página inicial e selecione-a; `front-page.php` exibe a landing page independentemente do conteúdo dessa página.
4. A página de estudos inclui áreas em `?area=visao-geral`, `diagnostico`, `treino`, `progresso`, `plano`, `notebooks`, `artefatos` e `professor`.

`build-preview.mjs` gera HTML estático em `preview-site/` para a importação visual pelo WordPress.com. A prévia reproduz o design como páginas editáveis, mas não é o tema PHP.

## Escopo funcional

O tema entrega a interface. O diagnóstico mostra uma questão de demonstração, o assistente não envia mensagens e as demais telas mostram estrutura visual. O login da página `entrar` usa o login padrão do WordPress. Autenticação Google, Firebase, progresso individual, banco de questões e IA da aplicação React precisam ser integrados separadamente para equivalência funcional.

O site de teste `olimpictest.wordpress.com` está em hospedagem WordPress.com **Simple**, que não permite upload de tema ZIP. A prévia criada pela importação estática é uma forma de revisar e editar o design no WordPress.com sem alterar o site de teste.
