<?php

return [
    'acl' => [
            'leads'           => 'Leads',
            'lead'            => 'Lead',
            'quotes'          => 'Cotações',
            'mail'            => 'Correio',
            'inbox'           => 'Caixa de Entrada',
            'draft'           => 'Rascunho',
            'outbox'          => 'Caixa de Saída',
            'sent'            => 'Enviados',
            'trash'           => 'Lixeira',
            'activities'      => 'Atividades',
            'webhook'         => 'Webhook',
            'contacts'        => 'Contatos',
            'persons'         => 'Pessoas',
            'organizations'   => 'Organizações',
            'products'        => 'Produtos',
            'settings'        => 'Configurações',
            'groups'          => 'Grupos',
            'roles'           => 'Funções',
            'users'           => 'Usuários',
            'user'            => 'Usuário',
            'automation'      => 'Automação',
            'attributes'      => 'Atributos',
            'pipelines'       => 'Funis',
            'sources'         => 'Fontes',
            'types'           => 'Tipos',
            'email-templates' => 'Modelos de Email',
            'workflows'       => 'Fluxos de Trabalho',
            'other-settings'  => 'Outras Configurações',
            'tags'            => 'Tags',
            'configuration'   => 'Ajustes',
            'create'          => 'Criar',
            'edit'            => 'Editar',
            'view'            => 'Visualizar',
            'print'           => 'Imprimir',
            'delete'          => 'Excluir',
            'export'          => 'Exportar',
            'mass-delete'     => 'Exclusão em Massa',

    ],

    'users' => [
        'activate-warning' => 'Sua conta ainda não está ativada. Por favor, entre em contato com o administrador.',
        'login-error'      => 'As credenciais não correspondem aos nossos registros.',

        'login' => [
            'email'                => 'Endereço de E-mail',
            'forget-password-link' => 'Esqueceu a Senha?',
            'password'             => 'Senha',
            'submit-btn'           => 'Entrar',
            'title'                => 'Entrar',
        ],

        'forget-password' => [
            'create' => [
                'email'           => 'E-mail Registrado',
                'email-not-exist' => 'E-mail Não Encontrado',
                'page-title'      => 'Esqueceu a Senha',
                'reset-link-sent' => 'Link para Redefinição de Senha Enviado',
                'sign-in-link'    => 'Voltar para Entrar?',
                'submit-btn'      => 'Redefinir',
                'title'           => 'Recuperar Senha',
            ],
        ],

        'reset-password' => [
                'back-link-title'  => 'Voltar para Entrar?',
                'confirm-password' => 'Confirmar Senha',
                'email'            => 'E-mail Registrado',
                'password'         => 'Senha',
                'submit-btn'       => 'Redefinir Senha',
                'title'            => 'Redefinir Senha',
        ],
    ],

    'account' => [
        'edit' => [
            'back-btn'          => 'Voltar',
            'change-password'   => 'Alterar Senha',
            'confirm-password'  => 'Confirmar Senha',
            'current-password'  => 'Senha Atual',
            'email'             => 'E-mail',
            'general'           => 'Geral',
            'invalid-password'  => 'A senha atual que você digitou está incorreta.',
            'name'              => 'Nome',
            'password'          => 'Senha',
            'profile-image'     => 'Imagem de Perfil',
            'save-btn'          => 'Salvar Conta',
            'title'             => 'Minha Conta',
            'update-success'    => 'Conta atualizada com sucesso',
            'upload-image-info' => 'Envie uma Imagem de Perfil (110px X 110px) nos Formatos PNG ou JPG',
        ],
    ],

    'components' => [
        'activities' => [
            'actions' => [
                'mail' => [
                    'btn'          => 'E-mail',
                    'title'        => 'Escrever E-mail',
                    'to'           => 'Para',
                    'enter-emails' => 'Pressione Enter para adicionar e-mails',
                    'cc'           => 'CC',
                    'bcc'          => 'CCO',
                    'subject'      => 'Assunto',
                    'send-btn'     => 'Enviar',
                    'message'      => 'Mensagem',
                ],

                'file' => [
                    'btn'           => 'Arquivo',
                    'title'         => 'Adicionar Arquivo',
                    'title-control' => 'Título',
                    'name'          => 'Nome',
                    'description'   => 'Descrição',
                    'file'          => 'Arquivo',
                    'save-btn'      => 'Salvar Arquivo',
                ],

                'note' => [
                    'btn'      => 'Nota',
                    'title'    => 'Adicionar Nota',
                    'comment'  => 'Comentário',
                    'save-btn' => 'Salvar Nota',
                ],

                'activity' => [
                    'btn'           => 'Atividade',
                    'title'         => 'Adicionar Atividade',
                    'title-control' => 'Título',
                    'description'   => 'Descrição',
                    'schedule-from' => 'Agendar De',
                    'schedule-to'   => 'Agendar Até',
                    'location'      => 'Localização',
                    'call'          => 'Chamada',
                    'meeting'       => 'Reunião',
                    'lunch'         => 'Almoço',
                    'save-btn'      => 'Salvar Atividade',

                    'participants' => [
                        'title'       => 'Participantes',
                        'placeholder' => 'Digite para buscar participantes',
                        'users'       => 'Usuários',
                        'persons'     => 'Pessoas',
                        'no-results'  => 'Nenhum resultado encontrado...',

                    ],
                ],
            ],

            'index' => [
                'from'         => 'De',
                'to'           => 'Para',
                'cc'           => 'Cc',
                'bcc'          => 'Bcc',
                'all'          => 'Todos',
                'planned'      => 'Planejado',
                'calls'        => 'Chamadas',
                'meetings'     => 'Reuniões',
                'lunches'      => 'Almoços',
                'files'        => 'Arquivos',
                'quotes'       => 'Cotações',
                'notes'        => 'Notas',
                'emails'       => 'E-mails',
                'change-log'   => 'Registros de Alteração',
                'by-user'      => 'Por :user',
                'scheduled-on' => 'Agendado em',
                'location'     => 'Localização',
                'participants' => 'Participantes',
                'mark-as-done' => 'Marcar como Concluído',
                'delete'       => 'Excluir',
                'edit'         => 'Editar',
                'view'         => 'Visualizar',
                'unlink'       => 'Desvincular',
                'empty'        => 'Vazio',


                'empty-placeholders' => [
                    'all' => [
                        'title'       => 'Nenhuma Atividade Encontrada',
                        'description' => 'Nenhuma atividade encontrada para isso. Você pode adicionar atividades clicando no botão no painel à esquerda.',
                    ],

                    'planned' => [
                        'title'       => 'Nenhuma Atividade Planejada Encontrada',
                        'description' => 'Nenhuma atividade planejada encontrada para isso. Você pode adicionar atividades planejadas clicando no botão no painel à esquerda.',
                    ],

                    'notes' => [
                        'title'       => 'Nenhuma Nota Encontrada',
                        'description' => 'Nenhuma nota encontrada para isso. Você pode adicionar notas clicando no botão no painel à esquerda.',
                    ],

                    'calls' => [
                        'title'       => 'Nenhuma Chamada Encontrada',
                        'description' => 'Nenhuma chamada encontrada para isso. Você pode adicionar chamadas clicando no botão no painel à esquerda.',
                    ],

                    'meetings' => [
                        'title'       => 'Nenhuma Reunião Encontrada',
                        'description' => 'Nenhuma reunião encontrada para isso. Você pode adicionar reuniões clicando no botão no painel à esquerda.',
                    ],

                    'lunches' => [
                        'title'       => 'Nenhum Almoço Encontrado',
                        'description' => 'Nenhum almoço encontrado para isso. Você pode adicionar almoços clicando no botão no painel à esquerda.',
                    ],

                    'files' => [
                        'title'       => 'Nenhum Arquivo Encontrado',
                        'description' => 'Nenhum arquivo encontrado para isso. Você pode adicionar arquivos clicando no botão no painel à esquerda.',
                    ],

                    'emails' => [
                        'title'       => 'Nenhum E-mail Encontrado',
                        'description' => 'Nenhum e-mail encontrado para isso. Você pode adicionar e-mails clicando no botão no painel à esquerda.',
                    ],

                    'system' => [
                        'title'       => 'Nenhum Registro de Alterações Encontrado',
                        'description' => 'Nenhum registro de alterações encontrado para isso.',
                    ],
                ],
            ],
        ],

        'media' => [
            'images' => [
                'add-image-btn'     => 'Adicionar Imagem',
                'ai-add-image-btn'  => 'IA Mágica',
                'allowed-types'     => 'png, jpeg, jpg',
                'not-allowed-error' => 'Somente arquivos de imagem (.jpeg, .jpg, .png, ..) são permitidos.',

                'placeholders' => [
                    'front'     => 'Frente',
                    'next'      => 'Próximo',
                    'size'      => 'Tamanho',
                    'use-cases' => 'Casos de Uso',
                    'zoom'      => 'Zoom',
                ],
            ],

            'videos' => [
                'add-video-btn'     => 'Adicionar Vídeo',
                'allowed-types'     => 'mp4, webm, mkv',
                'not-allowed-error' => 'Somente arquivos de vídeo (.mp4, .mov, .ogg ..) são permitidos.',
            ],
        ],

        'datagrid' => [
            'index' => [
                'no-records-selected'              => 'Nenhum registro foi selecionado.',
                'must-select-a-mass-action-option' => 'Você deve selecionar uma opção de ação em massa.',
                'must-select-a-mass-action'        => 'Você deve selecionar uma ação em massa.',
            ],

            'toolbar' => [
                'length-of' => ':length de',
                'of'        => 'de',
                'per-page'  => 'Por Página',
                'results'   => ':total Resultados',
                'delete'    => 'Excluir',
                'selected'  => ':total Itens Selecionados',

                'mass-actions' => [
                    'submit'        => 'Enviar',
                    'select-option' => 'Selecionar Opção',
                    'select-action' => 'Selecionar Ação',
                ],

                'filter' => [
                    'apply-filters-btn' => 'Aplicar Filtros',
                    'back-btn'          => 'Voltar',
                    'create-new-filter' => 'Criar Novo Filtro',
                    'custom-filters'    => 'Filtros Personalizados',
                    'delete-error'      => 'Algo deu errado ao excluir o filtro, por favor, tente novamente.',
                    'delete-success'    => 'Filtro excluído com sucesso.',
                    'empty-description' => 'Não há filtros selecionados disponíveis para salvar. Por favor, selecione filtros para salvar.',
                    'empty-title'       => 'Adicione Filtros para Salvar',
                    'name'              => 'Nome',
                    'quick-filters'     => 'Filtros Rápidos',
                    'save-btn'          => 'Salvar',
                    'save-filter'       => 'Salvar Filtro',
                    'saved-success'     => 'Filtro salvo com sucesso.',
                    'selected-filters'  => 'Filtros Selecionados',
                    'title'             => 'Filtro',
                    'update'            => 'Atualizar',
                    'update-filter'     => 'Atualizar Filtro',
                    'updated-success'   => 'Filtro atualizado com sucesso.',

                ],

                'search' => [
                    'title' => 'Buscar',
                ],
            ],

            'filters' => [
                'select' => 'Selecionar',
                'title'  => 'Filtros',

                'dropdown' => [
                    'searchable' => [
                        'at-least-two-chars' => 'Digite pelo menos 2 caracteres...',
                        'no-results'         => 'Nenhum resultado encontrado...',
                    ],
                ],

                'custom-filters' => [
                    'clear-all' => 'Limpar Tudo',
                    'title'     => 'Filtros Personalizados',
                ],

                'boolean-options' => [
                    'false' => 'Falso',
                    'true'  => 'Verdadeiro',
                ],

                'date-options' => [
                    'last-month'        => 'Mês Passado',
                    'last-six-months'   => 'Últimos 6 Meses',
                    'last-three-months' => 'Últimos 3 Meses',
                    'this-month'        => 'Este Mês',
                    'this-week'         => 'Esta Semana',
                    'this-year'         => 'Este Ano',
                    'today'             => 'Hoje',
                    'yesterday'         => 'Ontem',
                ],
            ],

            'table' => [
                'actions'              => 'Ações',
                'no-records-available' => 'Nenhum Registro Disponível.',
            ],
        ],

        'modal' => [
            'confirm' => [
                'agree-btn'    => 'Concordar',
                'disagree-btn' => 'Discordar',
                'message'      => 'Você tem certeza de que deseja realizar esta ação?',
                'title'        => 'Você tem certeza?',
            ],
        ],

        'tags' => [
            'index' => [
                'title'          => 'Tags',
                'added-tags'     => 'Tags Adicionadas',
                'save-btn'       => 'Salvar Tag',
                'placeholder'    => 'Digite para buscar tags',
                'add-tag'        => 'Adicionar \":term\"...',
                'aquarelle-red'  => 'Vermelho Aquarela',
                'crushed-cashew' => 'Caju Triturado',
                'beeswax'        => 'Cera de Abelha',
                'lemon-chiffon'  => 'Chiffon de Limão',
                'snow-flurry'    => 'Floco de Neve',
                'honeydew'       => 'Melão',
            ],
        ],

        'layouts' => [
            'header' => [
                'mega-search' => [
                    'title'   => 'Pesquisar',

                    'tabs' => [
                        'leads'    => 'Leads',
                        'quotes'   => 'Cotações',
                        'persons'  => 'Pessoas',
                        'products' => 'Produtos',
                    ],

                    'explore-all-products'          => 'Explorar todos os Produtos',
                    'explore-all-leads'             => 'Explorar todos os Leads',
                    'explore-all-contacts'          => 'Explorar todos os Contatos',
                    'explore-all-quotes'            => 'Explorar todas as Cotações',
                    'explore-all-matching-products' => 'Explorar todos os produtos correspondentes a ":query" (:count)',
                    'explore-all-matching-leads'    => 'Explorar todos os leads correspondentes a ":query" (:count)',
                    'explore-all-matching-contacts' => 'Explorar todos os contatos correspondentes a ":query" (:count)',
                    'explore-all-matching-quotes'   => 'Explorar todas as cotações correspondentes a ":query" (:count)',

                ],
            ],
        ],

        'attributes' => [
            'lookup' => [
                'click-to-add'    => 'Clique para adicionar',
                'search'          => 'Buscar',
                'no-result-found' => 'Nenhum resultado encontrado',
                'search'          => 'Buscar...',
            ],
        ],

        'lookup' => [
            'click-to-add' => 'Clique para Adicionar',
            'no-results'   => 'Nenhum Resultado Encontrado',
            'add-as-new'   => 'Adicionar como Novo',
            'search'       => 'Buscar...',
        ],

        'flash-group' => [
            'success' => 'Sucesso',
            'error'   => 'Erro',
            'warning' => 'Aviso',
            'info'    => 'Informação',
        ],
    ],

    'quotes' => [
        'index' => [
            'title'          => 'Cotações',
            'create-btn'     => 'Criar Cotação',
            'create-success' => 'Cotação criada com sucesso.',
            'update-success' => 'Cotação atualizada com sucesso.',
            'delete-success' => 'Cotação excluída com sucesso.',
            'delete-failed'  => 'A cotação não pode ser excluída.',

            'datagrid' => [
                'subject'        => 'Assunto',
                'sales-person'   => 'Vendedor',
                'expired-at'     => 'Expirado em',
                'created-at'     => 'Criado em',
                'expired-quotes' => 'Cotação Expirada',
                'person'         => 'Pessoa',
                'subtotal'       => 'Subtotal',
                'discount'       => 'Desconto',
                'tax'            => 'Imposto',
                'adjustment'     => 'Ajuste',
                'grand-total'    => 'Total Geral',
                'edit'           => 'Editar',
                'delete'         => 'Excluir',
                'print'          => 'Imprimir',
            ],

            'pdf' => [
                'title'            => 'Cotação',
                'grand-total'      => 'Total Geral',
                'adjustment'       => 'Ajuste',
                'discount'         => 'Desconto',
                'tax'              => 'Imposto',
                'sub-total'        => 'Subtotal',
                'amount'           => 'Quantidade',
                'quantity'         => 'Quantidade',
                'price'            => 'Preço',
                'product-name'     => 'Nome do Produto',
                'sku'              => 'SKU',
                'shipping-address' => 'Endereço de Envio',
                'billing-address'  => 'Endereço de Cobrança',
                'expired-at'       => 'Expirado em',
                'sales-person'     => 'Vendedor',
                'date'             => 'Data',
                'quote-id'         => 'ID da Cotação',

            ],
        ],

        'create' => [
                'title'             => 'Criar Cotação',
                'save-btn'          => 'Salvar Cotação',
                'quote-info'        => 'Informações da Cotação',
                'quote-info-info'   => 'Coloque as informações básicas da cotação.',
                'address-info'      => 'Informações de Endereço',
                'address-info-info' => 'Informações sobre o endereço relacionado à cotação.',
                'quote-items'       => 'Itens da Cotação',
                'search-products'   => 'Pesquisar Produtos',
                'link-to-lead'      => 'Vincular ao Lead',
                'quote-item-info'   => 'Adicionar Pedido de Produto para esta cotação.',
                'quote-name'        => 'Nome da Cotação',
                'quantity'          => 'Quantidade',
                'price'             => 'Preço',
                'discount'          => 'Desconto',
                'tax'               => 'Imposto',
                'total'             => 'Total',
                'amount'            => 'Valor',
                'add-item'          => '+ Adicionar Item',
                'sub-total'         => 'Subtotal (:symbol)',
                'total-discount'    => 'Desconto (:symbol)',
                'total-tax'         => 'Imposto (:symbol)',
                'total-adjustment'  => 'Ajuste (:symbol)',
                'grand-total'       => 'Total Geral (:symbol)',
                'discount-amount'   => 'Valor do Desconto',
                'tax-amount'        => 'Valor do Imposto',
                'adjustment-amount' => 'Valor do Ajuste',
                'product-name'      => 'Nome do Produto',
                'action'            => 'Ação',

        ],

        'edit' => [
            'title'             => 'Editar Cotação',
            'save-btn'          => 'Salvar Cotação',
            'quote-info'        => 'Informações da Cotação',
            'quote-info-info'   => 'Coloque as informações básicas da cotação.',
            'address-info'      => 'Informações de Endereço',
            'address-info-info' => 'Informações sobre o endereço relacionado à cotação.',
            'quote-items'       => 'Itens da Cotação',
            'link-to-lead'      => 'Vincular ao Lead',
            'quote-item-info'   => 'Adicionar Pedido de Produto para esta cotação.',
            'quote-name'        => 'Nome da Cotação',
            'quantity'          => 'Quantidade',
            'price'             => 'Preço',
            'search-products'   => 'Pesquisar Produtos',
            'discount'          => 'Desconto',
            'tax'               => 'Imposto',
            'total'             => 'Total',
            'amount'            => 'Valor',
            'add-item'          => '+ Adicionar Item',
            'sub-total'         => 'Subtotal (:symbol)',
            'total-discount'    => 'Desconto (:symbol)',
            'total-tax'         => 'Imposto (:symbol)',
            'total-adjustment'  => 'Ajuste (:symbol)',
            'grand-total'       => 'Total Geral (:symbol)',
            'discount-amount'   => 'Valor do Desconto',
            'tax-amount'        => 'Valor do Imposto',
            'adjustment-amount' => 'Valor do Ajuste',
            'product-name'      => 'Nome do Produto',
            'action'            => 'Ação',

        ],
    ],

    'contacts' => [
        'persons' => [
            'index' => [
                'title'          => 'Pessoas',
                'create-btn'     => 'Criar Pessoa',
                'create-success' => 'Pessoa criada com sucesso.',
                'update-success' => 'Pessoa atualizada com sucesso.',
                'delete-success' => 'Pessoa excluída com sucesso.',
                'delete-failed'  => 'A pessoa não pode ser excluída.',

                'datagrid' => [
                    'contact-numbers'   => 'Números de Contato',
                    'delete'            => 'Excluir',
                    'edit'              => 'Editar',
                    'emails'            => 'E-mails',
                    'id'                => 'ID',
                    'view'              => 'Visualizar',
                    'name'              => 'Nome',
                    'organization-name' => 'Nome da Organização',
                ],
            ],

            'view' => [
                'title'        => ':name',
                'about-person' => 'Sobre a Pessoa',

                'activities' => [
                    'index' => [
                        'all'          => 'Todos',
                        'calls'        => 'Chamadas',
                        'meetings'     => 'Reuniões',
                        'lunches'      => 'Almoços',
                        'files'        => 'Arquivos',
                        'quotes'       => 'Cotações',
                        'notes'        => 'Notas',
                        'emails'       => 'E-mails',
                        'by-user'      => 'Por :user',
                        'scheduled-on' => 'Agendado em',
                        'location'     => 'Localização',
                        'participants' => 'Participantes',
                        'mark-as-done' => 'Marcar como Concluído',
                        'delete'       => 'Excluir',
                        'edit'         => 'Editar',
                    ],

                    'actions' => [
                        'mail' => [
                            'btn'      => 'E-mail',
                            'title'    => 'Escrever E-mail',
                            'to'       => 'Para',
                            'cc'       => 'CC',
                            'bcc'      => 'BCC',
                            'subject'  => 'Assunto',
                            'send-btn' => 'Enviar',
                            'message'  => 'Mensagem',

                        ],

                        'file' => [
                            'btn'           => 'Arquivo',
                            'title'         => 'Adicionar Arquivo',
                            'title-control' => 'Título',
                            'name'          => 'Nome do Arquivo',
                            'description'   => 'Descrição',
                            'file'          => 'Arquivo',
                            'save-btn'      => 'Salvar Arquivo',

                        ],

                        'note' => [
                            'btn'      => 'Nota',
                            'title'    => 'Adicionar Nota',
                            'comment'  => 'Comentário',
                            'save-btn' => 'Salvar Nota',
                            ],

                            'activity' => [
                                'btn'           => 'Atividade',
                                'title'         => 'Adicionar Atividade',
                                'title-control' => 'Título',
                                'description'   => 'Descrição',
                                'schedule-from' => 'Agendar De',
                                'schedule-to'   => 'Agendar Até',
                                'location'      => 'Localização',
                                'call'          => 'Chamada',
                                'meeting'       => 'Reunião',
                                'lunch'         => 'Almoço',
                                'save-btn'      => 'Salvar Atividade',
                        ],
                    ],
                ],
            ],

            'create' => [
            'title'    => 'Criar Pessoa',
            'save-btn' => 'Salvar Pessoa',
            ],

            'edit' => [
                'title'    => 'Editar Pessoa',
                'save-btn' => 'Salvar Pessoa',
            ],
        ],

        'organizations' => [
            'index' => [
                'title'          => 'Organizações',
                'create-btn'     => 'Criar Organização',
                'create-success' => 'Organização criada com sucesso.',
                'update-success' => 'Organização atualizada com sucesso.',
                'delete-success' => 'Organização excluída com sucesso.',
                'delete-failed'  => 'A organização não pode ser excluída.',

                'datagrid' => [
                    'delete'        => 'Excluir',
                    'edit'          => 'Editar',
                    'id'            => 'ID',
                    'name'          => 'Nome',
                    'persons-count' => 'Quantidade de Pessoas',
                ],
            ],

            'create' => [
                'title'    => 'Criar Organização',
                'save-btn' => 'Salvar Organização',
                ],

                'edit' => [
                    'title'    => 'Editar Organização',
                    'save-btn' => 'Salvar Organização',
            ],
        ],
    ],

    'products' => [
        'index' => [
            'title'          => 'Produtos',
            'create-btn'     => 'Criar Produto',
            'create-success' => 'Produto criado com sucesso.',
            'update-success' => 'Produto atualizado com sucesso.',
            'delete-success' => 'Produto excluído com sucesso.',
            'delete-failed'  => 'Produto não pode ser excluído.',

            'datagrid'   => [
                'allocated' => 'Alocado',
                'delete'    => 'Excluir',
                'edit'      => 'Editar',
                'id'        => 'ID',
                'in-stock'  => 'Em Estoque',
                'name'      => 'Nome',
                'on-hand'   => 'Disponível',
                'price'     => 'Preço',
                'sku'       => 'SKU',
                'view'      => 'Visualizar',
            ],
        ],

        'create' => [
            'save-btn'  => 'Salvar Produtos',
            'title'     => 'Criar Produtos',
            'general'   => 'Geral',
            'price'     => 'Preço',
            ],

            'edit' => [
                'title'     => 'Editar Produtos',
                'save-btn'  => 'Salvar Produtos',
                'general'   => 'Geral',
                'price'     => 'Preço',
            ],

            'view' => [
                'sku'         => 'SKU',
                'all'         => 'Todos',
                'notes'       => 'Notas',
                'files'       => 'Arquivos',
                'inventories' => 'Estoque',
                'change-logs' => 'Registros de Alterações',

            'attributes' => [
            'about-product' => 'Sobre o Produto',
            ],

            'inventory' => [
                'source'     => 'Fonte',
                'in-stock'   => 'Em Estoque',
                'allocated'  => 'Alocado',
                'on-hand'    => 'Disponível',
                'actions'    => 'Ações',
                'assign'     => 'Atribuir',
                'add-source' => 'Adicionar Fonte',
                'location'   => 'Localização',
                'add-more'   => 'Adicionar Mais',
                'save'       => 'Salvar',
            ],
        ],
    ],

    'settings' => [
        'title' => 'Configurações',

        'groups' => [
            'index' => [
                'create-btn'        => 'Criar Grupo',
                'title'             => 'Grupos',
                'create-success'    => 'Grupo criado com sucesso.',
                'update-success'    => 'Grupo atualizado com sucesso.',
                'destroy-success'   => 'Grupo excluído com sucesso.',
                'delete-failed'     => 'O grupo não pode ser excluído.',

                'datagrid'   => [
                    'delete'      => 'Excluir',
                    'description' => 'Descrição',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'name'        => 'Nome',
                ],

                'edit' => [
                'title' => 'Editar Grupo',
                ],

                'create' => [
                    'name'        => 'Nome',
                    'title'       => 'Criar Grupo',
                    'description' => 'Descrição',
                    'save-btn'    => 'Salvar Grupo',
                ],
            ],
        ],

        'roles' => [
            'index' => [
                'being-used'                => 'A função não pode ser excluída, pois está sendo usada por um usuário administrador.',
                'create-btn'                => 'Criar Funções',
                'create-success'            => 'Função criada com sucesso.',
                'current-role-delete-error' => 'Não é possível excluir a função atribuída ao usuário atual.',
                'delete-failed'             => 'A função não pode ser excluída.',
                'delete-success'            => 'Função excluída com sucesso.',
                'last-delete-error'         => 'Pelo menos uma função é necessária.',
                'settings'                  => 'Configurações',
                'title'                     => 'Funções',
                'update-success'            => 'Função atualizada com sucesso.',
                'user-define-error'         => 'Não é possível excluir uma função do sistema.',

                'datagrid'   => [
                    'all'             => 'Todos',
                    'custom'          => 'Personalizado',
                    'delete'          => 'Excluir',
                    'description'     => 'Descrição',
                    'edit'            => 'Editar',
                    'id'              => 'ID',
                    'name'            => 'Nome',
                    'permission-type' => 'Tipo de Permissão',
                ],
            ],

            'create' => [
                'access-control' => 'Controle de Acesso',
                'all'            => 'Todos',
                'back-btn'       => 'Voltar',
                'custom'         => 'Personalizado',
                'description'    => 'Descrição',
                'general'        => 'Geral',
                'name'           => 'Nome',
                'permissions'    => 'Permissões',
                'save-btn'       => 'Salvar Função',
                'title'          => 'Criar Função',
                ],

                'edit' => [
                    'access-control' => 'Controle de Acesso',
                    'all'            => 'Todos',
                    'back-btn'       => 'Voltar',
                    'custom'         => 'Personalizado',
                    'description'    => 'Descrição',
                    'general'        => 'Geral',
                    'name'           => 'Nome',
                    'permissions'    => 'Permissões',
                    'save-btn'       => 'Salvar Função',
                    'title'          => 'Editar Função',
            ],
        ],

        'types' => [
            'index' => [
                'create-btn'     => 'Criar Tipo',
                'create-success' => 'Tipo criado com sucesso.',
                'delete-failed'  => 'O tipo não pode ser excluído.',
                'delete-success' => 'Tipo excluído com sucesso.',
                'title'          => 'Tipos',
                'update-success' => 'Tipo atualizado com sucesso.',

                'datagrid' => [
                    'delete'      => 'Excluir',
                    'description' => 'Descrição',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'name'        => 'Nome',
                ],

                'create' => [
                    'name'     => 'Nome',
                    'save-btn' => 'Salvar Tipo',
                    'title'    => 'Criar Tipo',

                ],

                'edit' => [
                    'title' => 'Editar Tipo',
                ],
            ],
        ],

        'sources' => [
            'index' => [
                'create-btn'     => 'Criar Fonte',
                'create-success' => 'Fonte criada com sucesso.',
                'delete-failed'  => 'Fonte não pode ser excluída.',
                'delete-success' => 'Fonte excluída com sucesso.',
                'title'          => 'Fontes',
                'update-success' => 'Fonte atualizada com sucesso.',

                'datagrid' => [
                    'delete' => 'Excluir',
                    'edit'   => 'Editar',
                    'id'     => 'ID',
                    'name'   => 'Nome',
                ],

                'create' => [
                    'name'     => 'Nome',
                    'save-btn' => 'Salvar Tipo',
                    'title'    => 'Criar Tipo',
                ],

                'edit' => [
                    'title' => 'Editar Tipo',
                ],
            ],
        ],

        'workflows' => [
            'index' => [
                'title'          => 'Workflows',
                'create-btn'     => 'Criar Workflow',
                'create-success' => 'Workflow criado com sucesso.',
                'update-success' => 'Workflow atualizado com sucesso.',
                'delete-success' => 'Workflow excluído com sucesso.',
                'delete-failed'  => 'O Workflow não pode ser excluído.',
                'datagrid'       => [
                    'delete'      => 'Excluir',
                    'description' => 'Descrição',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'name'        => 'Nome',
                ],
            ],

            'helpers' => [
                'update-related-leads'       => 'Atualizar leads relacionados',
                'send-email-to-sales-owner'  => 'Enviar e-mail para o responsável de vendas',
                'send-email-to-participants' => 'Enviar e-mail para os participantes',
                'add-webhook'                => 'Adicionar Webhook',
                'update-lead'                => 'Atualizar Lead',
                'update-person'              => 'Atualizar Pessoa',
                'send-email-to-person'       => 'Enviar e-mail para a pessoa',
                'add-tag'                    => 'Adicionar Tag',
                'add-note-as-activity'       => 'Adicionar Nota como Atividade',
            ],

            'create' => [
                'title'                  => 'Criar Workflow',
                'event'                  => 'Evento',
                'back-btn'               => 'Voltar',
                'save-btn'               => 'Salvar Workflow',
                'name'                   => 'Nome',
                'basic-details'          => 'Detalhes Básicos',
                'description'            => 'Descrição',
                'actions'                => 'Ações',
                'basic-details-info'     => 'Insira as informações básicas do workflow.',
                'event-info'             => 'Um evento dispara verificações, condições e executa ações predefinidas.',
                'conditions'             => 'Condições',
                'conditions-info'        => 'As condições são regras que verificam cenários, disparadas em ocasiões específicas.',
                'actions-info'           => 'Uma ação não apenas reduz o trabalho, mas também facilita bastante a automação no CRM.',
                'value'                  => 'Valor',
                'condition-type'         => 'Tipo de Condição',
                'all-condition-are-true' => 'Todas as condições são verdadeiras',
                'any-condition-are-true' => 'Qualquer condição é verdadeira',
                'add-condition'          => 'Adicionar Condição',
                'add-action'             => 'Adicionar Ação',
                'yes'                    => 'Sim',
                'no'                     => 'Não',
                'email'                  => 'E-mail',
                'is-equal-to'            => 'É igual a',
                'is-not-equal-to'        => 'Não é igual a',
                'equals-or-greater-than' => 'Igual ou maior que',
                'equals-or-less-than'    => 'Igual ou menor que',
                'greater-than'           => 'Maior que',
                'less-than'              => 'Menor que',
                'type'                   => 'Tipo',
                'contain'                => 'Contém',
                'contains'               => 'Contém',
                'does-not-contain'       => 'Não contém',

            ],

            'edit' => [
                'title'                  => 'Editar Workflow',
                'event'                  => 'Evento',
                'back-btn'               => 'Voltar',
                'save-btn'               => 'Salvar Workflow',
                'name'                   => 'Nome',
                'basic-details'          => 'Detalhes Básicos',
                'description'            => 'Descrição',
                'actions'                => 'Ações',
                'type'                   => 'Tipo',
                'basic-details-info'     => 'Insira as informações básicas do workflow.',
                'event-info'             => 'Um evento dispara verificações, condições e executa ações predefinidas.',
                'conditions'             => 'Condições',
                'conditions-info'        => 'As condições são regras que verificam cenários, disparadas em ocasiões específicas.',
                'actions-info'           => 'Uma ação não apenas reduz o trabalho, mas também facilita bastante a automação no CRM.',
                'value'                  => 'Valor',
                'condition-type'         => 'Tipo de Condição',
                'all-condition-are-true' => 'Todas as condições são verdadeiras',
                'any-condition-are-true' => 'Qualquer condição é verdadeira',
                'add-condition'          => 'Adicionar Condição',
                'add-action'             => 'Adicionar Ação',
                'yes'                    => 'Sim',
                'no'                     => 'Não',
                'email'                  => 'E-mail',
                'is-equal-to'            => 'É igual a',
                'is-not-equal-to'        => 'Não é igual a',
                'equals-or-greater-than' => 'Igual ou maior que',
                'equals-or-less-than'    => 'Igual ou menor que',
                'greater-than'           => 'Maior que',
                'less-than'              => 'Menor que',
                'contain'                => 'Contém',
                'contains'               => 'Contém',
                'does-not-contain'       => 'Não contém',

            ],
        ],

        'webforms' => [
            'index' => [
                'title'          => 'Webforms',
                'create-btn'     => 'Criar Webform',
                'create-success' => 'Webform criado com sucesso.',
                'update-success' => 'Webform atualizado com sucesso.',
                'delete-success' => 'Webform deletado com sucesso.',
                'delete-failed'  => 'Não foi possível deletar o Webform.',

                'datagrid'       => [
                    'id'     => 'ID',
                    'title'  => 'Título',
                    'edit'   => 'Editar',
                    'delete' => 'Deletar',
                ],
            ],

            'create' => [
                'add-attribute-btn'        => 'Adicionar Botão de Atributo',
                'attribute-label-color'    => 'Cor do Rótulo do Atributo',
                'attributes'               => 'Atributos',
                'attributes-info'          => 'Adicione atributos personalizados ao formulário.',
                'background-color'         => 'Cor de Fundo',
                'create-lead'              => 'Criar Lead',
                'customize-webform'        => 'Personalizar Webform',
                'customize-webform-info'   => 'Personalize seu formulário com as cores dos elementos de sua escolha.',
                'description'              => 'Descrição',
                'display-custom-message'   => 'Exibir mensagem personalizada',
                'form-background-color'    => 'Cor de Fundo do Formulário',
                'form-submit-btn-color'    => 'Cor do Botão de Enviar do Formulário',
                'form-submit-button-color' => 'Cor do Botão de Enviar do Formulário',
                'form-title-color'         => 'Cor do Título do Formulário',
                'general'                  => 'Geral',
                'leads'                    => 'Leads',
                'person'                   => 'Pessoa',
                'save-btn'                 => 'Salvar Webform',
                'submit-button-label'      => 'Rótulo do Botão de Envio',
                'submit-success-action'    => 'Ação de Sucesso de Envio',
                'title'                    => 'Criar Webform',
            ],

            'edit' => [
                'add-attribute-btn'         => 'Adicionar Botão de Atributo',
                'attribute-label-color'     => 'Cor do Rótulo do Atributo',
                'attributes'                => 'Atributos',
                'attributes-info'           => 'Adicione atributos personalizados ao formulário.',
                'background-color'          => 'Cor de Fundo',
                'code-snippet'              => 'Snippet de Código',
                'copied'                    => 'Copiado',
                'copy'                      => 'Copiar',
                'create-lead'               => 'Criar Lead',
                'customize-webform'         => 'Personalizar Webform',
                'customize-webform-info'    => 'Personalize seu formulário com as cores dos elementos de sua escolha.',
                'description'               => 'Descrição',
                'display-custom-message'    => 'Exibir mensagem personalizada',
                'embed'                     => 'Incorporar',
                'form-background-color'     => 'Cor de Fundo do Formulário',
                'form-submit-btn-color'     => 'Cor do Botão de Envio do Formulário',
                'form-submit-button-color'  => 'Cor do Botão de Envio do Formulário',
                'form-title-color'          => 'Cor do Título do Formulário',
                'general'                   => 'Geral',
                'preview'                   => 'Pré-visualização',
                'person'                    => 'Pessoa',
                'public-url'                => 'URL Pública',
                'redirect-to-url'           => 'Redirecionar para URL',
                'save-btn'                  => 'Salvar Webform',
                'submit-button-label'       => 'Rótulo do Botão de Envio',
                'submit-success-action'     => 'Ação de Sucesso de Envio',
                'title'                     => 'Editar Webform',
            ],
        ],

        'email-template' => [
            'index' => [
                'create-btn'     => 'Criar Modelo de Email',
                'title'          => 'Modelos de Email',
                'create-success' => 'Modelo de Email criado com sucesso.',
                'update-success' => 'Modelo de Email atualizado com sucesso.',
                'delete-success' => 'Modelo de Email excluído com sucesso.',
                'delete-failed'  => 'O Modelo de Email não pode ser excluído.',

                'datagrid'   => [
                    'delete'       => 'Excluir',
                    'edit'         => 'Editar',
                    'id'           => 'ID',
                    'name'         => 'Nome',
                    'subject'      => 'Assunto',
                ],
            ],

            'create'     => [
                'title'                => 'Criar Modelo de Email',
                'save-btn'             => 'Salvar Modelo de Email',
                'email-template'       => 'Modelo de Email',
                'subject'              => 'Assunto',
                'content'              => 'Conteúdo',
                'subject-placeholders' => 'Marcadores de Assunto',
                'general'              => 'Geral',
                'name'                 => 'Nome',
            ],

            'edit' => [
                'title'                => 'Editar Modelo de Email',
                'save-btn'             => 'Salvar Modelo de Email',
                'email-template'       => 'Modelo de Email',
                'subject'              => 'Assunto',
                'content'              => 'Conteúdo',
                'subject-placeholders' => 'Marcadores de Assunto',
                'general'              => 'Geral',
                'name'                 => 'Nome',
            ],
        ],

        'tags' => [
            'index' => [
                'create-btn'     => 'Criar Tag',
                'title'          => 'Tags',
                'create-success' => 'Tag criada com sucesso.',
                'update-success' => 'Tag atualizada com sucesso.',
                'delete-success' => 'Tag deletada com sucesso.',
                'delete-failed'  => 'Não foi possível deletar a Tag.',

                'datagrid' => [
                    'delete'      => 'Deletar',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'name'        => 'Nome',
                    'users'       => 'Usuários',
                    'created-at'  => 'Criado em',
                ],

                'create' => [
                    'name'     => 'Nome',
                    'save-btn' => 'Salvar Tag',
                    'title'    => 'Criar Tag',
                    'color'    => 'Cor',
                ],

                'edit' => [
                    'title' => 'Editar Tag',
                ],
            ],
        ],

        'users' => [
            'index' => [
                'create-btn'          => 'Criar Usuário',
                'create-success'      => 'Usuário criado com sucesso.',
                'delete-failed'       => 'O usuário não pode ser excluído.',
                'delete-success'      => 'Usuário excluído com sucesso.',
                'last-delete-error'   => 'Pelo menos um usuário é necessário.',
                'mass-delete-failed'  => 'Os usuários não podem ser excluídos.',
                'mass-delete-success' => 'Usuários excluídos com sucesso.',
                'mass-update-failed'  => 'Os usuários não podem ser atualizados.',
                'mass-update-success' => 'Usuários atualizados com sucesso.',
                'title'               => 'Usuários',
                'update-success'      => 'Usuário atualizado com sucesso.',
                'user-define-error'   => 'Não é possível excluir o usuário do sistema.',
                'active'              => 'Ativo',
                'inactive'            => 'Inativo',


                'datagrid' => [
                    'active'        => 'Ativo',
                    'created-at'    => 'Criado Em',
                    'delete'        => 'Excluir',
                    'edit'          => 'Editar',
                    'email'         => 'Email',
                    'id'            => 'ID',
                    'inactive'      => 'Inativo',
                    'name'          => 'Nome',
                    'status'        => 'Status',
                    'update-status' => 'Atualizar Status',
                    'users'         => 'Usuários',

                ],

                'create' => [
                    'confirm-password' => 'Confirmar Senha',
                    'email'            => 'Email',
                    'general'          => 'Geral',
                    'global'           => 'Global',
                    'group'            => 'Grupo',
                    'individual'       => 'Individual',
                    'name'             => 'Nome',
                    'password'         => 'Senha',
                    'permission'       => 'Permissão',
                    'role'             => 'Papel',
                    'save-btn'         => 'Salvar Usuário',
                    'status'           => 'Status',
                    'title'            => 'Criar Usuário',
                    'view-permission'  => 'Visualizar Permissão',

                ],

                'edit' => [
                    'title' => 'Editar Usuário',
                ],
            ],
        ],

        'pipelines' => [
            'index' => [
                'title'                => 'Funis de Vendas',
                'create-btn'           => 'Criar Funil de Vendas',
                'create-success'       => 'Funil de Vendas criado com sucesso.',
                'update-success'       => 'Funil de Vendas atualizado com sucesso.',
                'delete-success'       => 'Funil de Vendas deletado com sucesso.',
                'delete-failed'        => 'Não foi possível deletar o Funil de Vendas.',
                'default-delete-error' => 'O funil de vendas padrão não pode ser deletado.',


                'datagrid' => [
                    'delete'      => 'Deletar',
                    'edit'        => 'Editar',
                    'id'          => 'ID',
                    'is-default'  => 'É Padrão',
                    'name'        => 'Nome',
                    'no'          => 'Não',
                    'rotten-days' => 'Dias de Expiração',
                    'yes'         => 'Sim',

                ],
            ],

            'create' => [
                'title'                => 'Criar Pipeline',
                'save-btn'             => 'Salvar Pipeline',
                'name'                 => 'Nome',
                'rotten-days'          => 'Dias de Expiração',
                'mark-as-default'      => 'Marcar como Padrão',
                'general'              => 'Geral',
                'probability'          => 'Probabilidade(%)',
                'new-stage'            => 'Novo',
                'won-stage'            => 'Ganho',
                'lost-stage'           => 'Perdido',
                'stage-btn'            => 'Adicionar Estágio',
                'stages'               => 'Estágios',
                'duplicate-name'       => 'O campo "Nome" não pode ser duplicado',
                'delete-stage'         => 'Excluir Estágio',
                'add-new-stages'       => 'Adicionar Novos Estágios',
                'add-stage-info'       => 'Adicionar novo estágio ao seu Pipeline',
                'newly-added'          => 'Recém Adicionado',
                'stage-delete-success' => 'Estágio Excluído com Sucesso',

            ],

            'edit'  => [
                'title'                => 'Editar Pipeline',
                'save-btn'             => 'Salvar Pipeline',
                'name'                 => 'Nome',
                'rotten-days'          => 'Dias de Expiração',
                'mark-as-default'      => 'Marcar como Padrão',
                'general'              => 'Geral',
                'probability'          => 'Probabilidade(%)',
                'new-stage'            => 'Novo',
                'won-stage'            => 'Ganho',
                'lost-stage'           => 'Perdido',
                'stage-btn'            => 'Adicionar Estágio',
                'stages'               => 'Estágios',
                'duplicate-name'       => 'O campo "Nome" não pode ser duplicado',
                'delete-stage'         => 'Excluir Estágio',
                'add-new-stages'       => 'Adicionar Novos Estágios',
                'add-stage-info'       => 'Adicionar novo estágio ao seu Pipeline',
                'stage-delete-success' => 'Estágio Excluído com Sucesso',

            ],
        ],

        'webhooks' => [
            'index' => [
                'title'          => 'Webhooks',
                'create-btn'     => 'Criar Webhook',
                'create-success' => 'Webhook criado com sucesso.',
                'update-success' => 'Webhook atualizado com sucesso.',
                'delete-success' => 'Webhook excluído com sucesso.',
                'delete-failed'  => 'Não foi possível excluir o Webhook.',


                'datagrid' => [
                    'id'          => 'ID',
                    'delete'      => 'Excluir',
                    'edit'        => 'Editar',
                    'name'        => 'Nome',
                    'entity-type' => 'Tipo de Entidade',
                    'end-point'   => 'Ponto Final',

                ],
            ],

            'create' => [
                'title'                 => 'Criar Webhook',
                'save-btn'              => 'Salvar Webhook',
                'info'                  => 'Digite os detalhes do webhook',
                'url-and-parameters'    => 'URL e Parâmetros',
                'method'                => 'Método',
                'post'                  => 'Post',
                'put'                   => 'Put',
                'url-endpoint'          => 'Endpoint da URL',
                'parameters'            => 'Parâmetros',
                'add-new-parameter'     => 'Adicionar Novo Parâmetro',
                'url-preview'           => 'Prévia da URL:',
                'headers'               => 'Cabeçalhos',
                'add-new-header'        => 'Adicionar Novo Cabeçalho',
                'body'                  => 'Corpo',
                'default'               => 'Padrão',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'raw'                   => 'Raw',
                'general'               => 'Geral',
                'name'                  => 'Nome',
                'entity-type'           => 'Tipo de Entidade',
                'insert-placeholder'    => 'Inserir Espaço Reservado',
                'description'           => 'Descrição',
                'json'                  => 'Json',
                'text'                  => 'Texto',

            ],

            'edit' => [
                'title'                 => 'Editar Webhook',
                'edit-btn'              => 'Salvar Webhook',
                'save-btn'              => 'Salvar Webhook',
                'info'                  => 'Digite os detalhes do webhook',
                'url-and-parameters'    => 'URL e Parâmetros',
                'method'                => 'Método',
                'post'                  => 'Post',
                'put'                   => 'Put',
                'url-endpoint'          => 'Endpoint da URL',
                'parameters'            => 'Parâmetros',
                'add-new-parameter'     => 'Adicionar Novo Parâmetro',
                'url-preview'           => 'Prévia da URL:',
                'headers'               => 'Cabeçalhos',
                'add-new-header'        => 'Adicionar Novo Cabeçalho',
                'body'                  => 'Corpo',
                'default'               => 'Padrão',
                'x-www-form-urlencoded' => 'x-www-form-urlencoded',
                'raw'                   => 'Raw',
                'general'               => 'Geral',
                'name'                  => 'Nome',
                'entity-type'           => 'Tipo de Entidade',
                'insert-placeholder'    => 'Inserir Espaço Reservado',
                'description'           => 'Descrição',
                'json'                  => 'Json',
                'text'                  => 'Texto',

            ],
        ],

        'warehouses' => [
            'index' => [
                'title'          => 'Armazéns',
                'create-btn'     => 'Criar Armazém',
                'create-success' => 'Armazém criado com sucesso.',
                'name-exists'    => 'O nome do armazém já existe.',
                'update-success' => 'Armazém atualizado com sucesso.',
                'delete-success' => 'Armazém excluído com sucesso.',
                'delete-failed'  => 'Não foi possível excluir o armazém.',


                'datagrid' => [
                    'id'              => 'ID',
                    'name'            => 'Nome',
                    'contact-name'    => 'Nome do Contato',
                    'delete'          => 'Excluir',
                    'edit'            => 'Editar',
                    'view'            => 'Visualizar',
                    'created-at'      => 'Criado Em',
                    'products'        => 'Produtos',
                    'contact-emails'  => 'Emails de Contato',
                    'contact-numbers' => 'Números de Contato',

                ],
            ],

            'create' => [
                'title'         => 'Criar Armazém',
                'save-btn'      => 'Salvar Armazém',
                'contact-info'  => 'Informações de Contato',
            ],

            'edit' => [
                'title'         => 'Editar Armazém',
                'save-btn'      => 'Salvar Armazém',
                'contact-info'  => 'Informações de Contato',
            ],

            'view' => [
                'all'         => 'Todos',
                'notes'       => 'Notas',
                'files'       => 'Arquivos',
                'location'    => 'Localização',
                'change-logs' => 'Registros de Alterações',


                'locations' => [
                    'action'         => 'Ação',
                    'add-location'   => 'Adicionar Localização',
                    'create-success' => 'Localização criada com sucesso.',
                    'delete'         => 'Excluir',
                    'delete-failed'  => 'A localização não pode ser excluída.',
                    'delete-success' => 'Localização excluída com sucesso.',
                    'name'           => 'Nome',
                    'save-btn'       => 'Salvar',

                ],

                'general-information' => [
                    'title' => 'Informações Gerais',
                ],

                'contact-information' => [
                    'title' => 'Informações de contato',
                ],
            ],
        ],

        'attributes' => [
            'index' => [
                'title'              => 'Atributos',
                'create-btn'         => 'Criar Atributo',
                'create-success'     => 'Atributo criado com sucesso.',
                'update-success'     => 'Atributo atualizado com sucesso.',
                'delete-success'     => 'Atributo excluído com sucesso.',
                'delete-failed'      => 'O atributo não pode ser excluído.',
                'user-define-error'  => 'Não é possível excluir atributo do sistema.',
                'mass-delete-failed' => 'Atributos do sistema não podem ser excluídos.',


                'datagrid' => [
                    'yes'         => 'Sim',
                    'no'          => 'Não',
                    'id'          => 'ID',
                    'code'        => 'Código',
                    'name'        => 'Nome',
                    'entity-type' => 'Tipo de Entidade',
                    'type'        => 'Tipo',
                    'is-default'  => 'É Padrão',
                    'edit'        => 'Editar',
                    'delete'      => 'Excluir',
                ],
            ],

            'create'  => [
                'title'                 => 'Criar Atributo',
                'save-btn'              => 'Salvar Atributo',
                'code'                  => 'Código',
                'name'                  => 'Nome',
                'entity-type'           => 'Tipo de Entidade',
                'type'                  => 'Tipo',
                'validations'           => 'Validações',
                'is-required'           => 'É Obrigatório',
                'input-validation'      => 'Validação de Entrada',
                'is-unique'             => 'É Único',
                'labels'                => 'Rótulos',
                'general'               => 'Geral',
                'numeric'               => 'Numérico',
                'decimal'               => 'Decimal',
                'url'                   => 'URL',
                'options'               => 'Opções',
                'option-type'           => 'Tipo de Opção',
                'lookup-type'           => 'Tipo de Pesquisa',
                'add-option'            => 'Adicionar Opção',
                'save-option'           => 'Salvar Opção',
                'option-name'           => 'Nome da Opção',
                'add-attribute-options' => 'Adicionar Opções de Atributo',
                'text'                  => 'Texto',
                'textarea'              => 'Área de Texto',
                'price'                 => 'Preço',
                'boolean'               => 'Booleano',
                'select'                => 'Selecionar',
                'multiselect'           => 'Seleção Múltipla',
                'email'                 => 'E-mail',
                'address'               => 'Endereço',
                'phone'                 => 'Telefone',
                'datetime'              => 'Data e Hora',
                'date'                  => 'Data',
                'image'                 => 'Imagem',
                'file'                  => 'Arquivo',
                'lookup'                => 'Pesquisa',
                'entity_type'           => 'Tipo de Entidade',
                'checkbox'              => 'Caixa de Seleção',
                'is_required'           => 'É Obrigatório',
                'is_unique'             => 'É Único',

            ],

            'edit'  => [
                'title'                 => 'Editar Atributo',
                'save-btn'              => 'Salvar Atributo',
                'code'                  => 'Código',
                'name'                  => 'Nome',
                'labels'                => 'Rótulos',
                'entity-type'           => 'Tipo de Entidade',
                'type'                  => 'Tipo',
                'validations'           => 'Validações',
                'is-required'           => 'É Obrigatório',
                'input-validation'      => 'Validação de Entrada',
                'is-unique'             => 'É Único',
                'general'               => 'Geral',
                'numeric'               => 'Numérico',
                'decimal'               => 'Decimal',
                'url'                   => 'URL',
                'options'               => 'Opções',
                'option-type'           => 'Tipo de Opção',
                'lookup-type'           => 'Tipo de Pesquisa',
                'add-option'            => 'Adicionar Opção',
                'save-option'           => 'Salvar Opção',
                'option-name'           => 'Nome da Opção',
                'add-attribute-options' => 'Adicionar Opções de Atributo',
                'text'                  => 'Texto',
                'textarea'              => 'Área de Texto',
                'price'                 => 'Preço',
                'boolean'               => 'Booleano',
                'select'                => 'Selecionar',
                'multiselect'           => 'Seleção Múltipla',
                'email'                 => 'E-mail',
                'address'               => 'Endereço',
                'phone'                 => 'Telefone',
                'datetime'              => 'Data e Hora',
                'date'                  => 'Data',
                'image'                 => 'Imagem',
                'file'                  => 'Arquivo',
                'lookup'                => 'Pesquisa',
                'entity_type'           => 'Tipo de Entidade',
                'checkbox'              => 'Caixa de Seleção',
                'is_required'           => 'É Obrigatório',
                'is_unique'             => 'É Único',

            ],
        ],
    ],

    'activities' => [
        'index' => [
            'title'      => 'Atividades',

            'datagrid' => [
               'comment'       => 'Comentário',
                'created_at'    => 'Criado Em',
                'created_by'    => 'Criado Por',
                'edit'          => 'Editar',
                'id'            => 'ID',
                'done'          => 'Feito',
                'not-done'      => 'Não Feito',
                'lead'          => 'Lead',
                'mass-delete'   => 'Excluir em Massa',
                'mass-update'   => 'Atualizar em Massa',
                'schedule-from' => 'Agendar De',
                'schedule-to'   => 'Agendar Até',
                'schedule_from' => 'Agendar De',
                'schedule_to'   => 'Agendar Até',
                'title'         => 'Título',
                'is_done'       => 'Está Feito',
                'type'          => 'Tipo',
                'update'        => 'Atualizar',
                'call'          => 'Chamada',
                'meeting'       => 'Reunião',
                'lunch'         => 'Almoço',

            ],
        ],

        'edit' => [
            'title'           => 'Editar Atividade',
            'back-btn'        => 'Voltar',
            'save-btn'        => 'Salvar Atividade',
            'type'            => 'Tipo de Atividade',
            'call'            => 'Chamada',
            'meeting'         => 'Reunião',
            'lunch'           => 'Almoço',
            'schedule_to'     => 'Agendar Até',
            'schedule_from'   => 'Agendar De',
            'location'        => 'Localização',
            'comment'         => 'Comentário',
            'lead'            => 'Lead',
            'participants'    => 'Participantes',
            'general'         => 'Geral',
            'persons'         => 'Pessoas',
            'no-result-found' => 'Registros não encontrados.',
            'users'           => 'Usuários',

        ],

        'updated'              => 'Atualizado :attribute',
        'created'              => 'Criado',
        'duration-overlapping' => 'Participantes têm outra reunião neste horário. Deseja continuar?',
        'create-success'       => 'Atividade criada com sucesso.',
        'update-success'       => 'Atividade atualizada com sucesso.',
        'overlapping-error'    => 'Participantes têm outra reunião neste horário.',
        'mass-update-success'  => 'Atividades atualizadas com sucesso.',
        'destroy-success'      => 'Atividade excluída com sucesso.',
        'delete-failed'        => 'A atividade não pode ser excluída.',

    ],

    'mail' => [
        'index' => [
            'compose'           => 'Compor',
            'draft'             => 'Rascunho',
            'inbox'             => 'Caixa de Entrada',
            'outbox'            => 'Caixa de Saída',
            'sent'              => 'Enviado',
            'trash'             => 'Lixeira',
            'compose-mail-btn'  => 'Compor E-mail',
            'btn'               => 'E-mail',
            'mail'              => [
                'title'         => 'Compor E-mail',
                'to'            => 'Para',
                'enter-emails'  => 'Pressione Enter para adicionar e-mails',
                'cc'            => 'CC',
                'bcc'           => 'CCO',
                'subject'       => 'Assunto',
                'send-btn'      => 'Enviar',
                'message'       => 'Mensagem',
                'draft'         => 'Rascunho',
            ],

            'datagrid' => [
                'id'            => 'ID',
                'from'          => 'De',
                'to'            => 'Para',
                'subject'       => 'Assunto',
                'tag-name'      => 'Nome da Tag',
                'created-at'    => 'Criado Em',
                'move-to-inbox' => 'Mover para Caixa de Entrada',
                'edit'          => 'Editar',
                'view'          => 'Visualizar',
                'delete'        => 'Excluir',

            ],
        ],

        'create-success'      => 'Email enviado com sucesso.',
        'update-success'      => 'Email atualizado com sucesso.',
        'mass-update-success' => 'Emails atualizados com sucesso.',
        'delete-success'      => 'Email excluído com sucesso.',
        'delete-failed'       => 'Não foi possível excluir o email.',


        'view' => [
            'title'                      => 'Emails',
            'subject'                    => ':subject',
            'link-mail'                  => 'Link do Email',
            'to'                         => 'Para',
            'cc'                         => 'CC',
            'bcc'                        => 'BCC',
            'reply'                      => 'Responder',
            'reply-all'                  => 'Responder a Todos',
            'forward'                    => 'Encaminhar',
            'delete'                     => 'Excluir',
            'enter-mails'                => 'Digite o email',
            'rotten-days'                => 'Lead está podre há :days dias',
            'search-an-existing-lead'    => 'Buscar um lead existente',
            'search-an-existing-contact' => 'Buscar um contato existente',
            'message'                    => 'Mensagem',
            'add-attachments'            => 'Adicionar Anexos',
            'discard'                    => 'Descartar',
            'send'                       => 'Enviar',
            'no-result-found'            => 'Nenhum resultado encontrado',
            'add-new-contact'            => 'Adicionar Novo Contato',
            'description'                => 'Descrição',
            'search'                     => 'Buscar...',
            'add-new-lead'               => 'Adicionar Novo Lead',
            'create-new-contact'         => 'Criar Novo Contato',
            'save-contact'               => 'Salvar Contato',
            'create-lead'                => 'Criar Lead',
            'linked-contact'             => 'Contato Vinculado',
            'link-to-contact'            => 'Vincular ao Contato',
            'link-to-lead'               => 'Vincular ao Lead',
            'linked-lead'                => 'Lead Vinculado',
            'lead-details'               => 'Detalhes do Lead',
            'contact-person'             => 'Pessoa de Contato',
            'product'                    => 'Produto',


            'tags' => [
                'create-success'  => 'Tag criada com sucesso.',
                'destroy-success' => 'Tag excluída com sucesso.',

            ],
        ],
    ],

    'common' => [
        'custom-attributes' => [
            'select-country' => 'Selecione o País',
            'select-state'   => 'Selecione o Estado',
            'state'          => 'Estado',
            'city'           => 'Cidade',
            'postcode'       => 'Código Postal',
            'work'           => 'Trabalho',
            'home'           => 'Casa',
            'add-more'       => 'Adicionar Mais',
            'select'         => 'Selecionar',
            'country'        => 'País',
            'address'        => 'Endereço',

        ],
    ],

    'leads' => [
        'create-success'    => 'Lead criado com sucesso.',
        'update-success'    => 'Lead atualizado com sucesso.',
        'destroy-success'   => 'Lead excluído com sucesso.',
        'destroy-failed'    => 'Não foi possível excluir o Lead.',


        'index' => [
            'title'      => 'Leads',
            'create-btn' => 'Criar Lead',

            'datagrid' => [
                'id'                  => 'ID',
                'sales-person'        => 'Vendedor',
                'subject'             => 'Assunto',
                'source'              => 'Fonte',
                'lead-value'          => 'Valor do Lead',
                'lead-type'           => 'Tipo de Lead',
                'tag-name'            => 'Nome da Tag',
                'contact-person'      => 'Pessoa de Contato',
                'stage'               => 'Estágio',
                'rotten-lead'         => 'Lead Podre',
                'expected-close-date' => 'Data de Fechamento Esperada',
                'created-at'          => 'Criado em',
                'no'                  => 'Não',
                'yes'                 => 'Sim',
                'delete'              => 'Excluir',
                'mass-delete'         => 'Excluir em Massa',
                'mass-update'         => 'Atualizar em Massa',

            ],

            'kanban' => [
                'rotten-days'            => 'Lead está podre há :days dias',
                'empty-list'             => 'Sua lista de Leads está vazia',
                'empty-list-description' => 'Crie um lead para organizar seus objetivos.',
                'create-lead-btn'        => 'Criar Lead',


                'columns' => [
                    'contact-person'      => 'Pessoa de Contato',
                    'id'                  => 'ID',
                    'lead-type'           => 'Tipo de Lead',
                    'lead-value'          => 'Valor do Lead',
                    'sales-person'        => 'Vendedor',
                    'source'              => 'Fonte',
                    'title'               => 'Título',
                    'tags'                => 'Tags',
                    'expected-close-date' => 'Data de Fechamento Esperada',
                    'created-at'          => 'Criado em',

                ],

                'toolbar' => [
                    'search' => [
                        'title' => 'Pesquisar',
                    ],

                    'filters' => [
                        'apply-filters' => 'Aplicar Filtros',
                        'clear-all'     => 'Limpar Tudo',
                        'filter'        => 'Filtrar',
                        'filters'       => 'Filtros',
                        'select'        => 'Selecionar',

                    ],
                ],
            ],

            'view-switcher' => [
                'all-pipelines'       => 'Todos os Pipelines',
                'create-new-pipeline' => 'Criar Novo Pipeline',

            ],
        ],

        'create' => [
            'title'          => 'Criar Lead',
            'save-btn'       => 'Salvar',
            'details'        => 'Detalhes',
            'details-info'   => 'Informe as Informações Básicas do Lead',
            'contact-person' => 'Pessoa de Contato',
            'contact-info'   => 'Informações Sobre a Pessoa de Contato',
            'products'       => 'Produtos',
            'products-info'  => 'Informações Sobre os Produtos',

        ],

        'edit' => [
            'title'          => 'Editar Lead',
            'save-btn'       => 'Salvar',
            'details'        => 'Detalhes',
            'details-info'   => 'Coloque as informações básicas do Lead',
            'contact-person' => 'Pessoa de Contato',
            'contact-info'   => 'Informações sobre a Pessoa de Contato',
            'products'       => 'Produtos',
            'products-info'  => 'Informações sobre os Produtos',

        ],

        'common' => [
            'contact' => [
                'name'           => 'Nome',
                'email'          => 'Email',
                'contact-number' => 'Número de Contato',
                'organization'   => 'Organização',

            ],

            'products' => [
                'product-name' => 'Nome do Produto',
                'quantity'     => 'Quantidade',
                'price'        => 'Preço',
                'amount'       => 'Valor',
                'action'       => 'Ação',
                'add-more'     => 'Adicionar Mais',
                'total'        => 'Total',

            ],
        ],

        'view' => [
            'title'       => 'Lead: :title',
            'rotten-days' => ':days Days',

            'tabs'        => [
                'description' => 'Descrição',
                'products'    => 'Produtos',
                'quotes'      => 'Citações',

            ],

            'attributes' => [
                'title' => 'Sobre o Lead',
            ],

            'quotes'=> [
                'subject'         => 'Assunto',
                'expired-at'      => 'Expirado em',
                'sub-total'       => 'Subtotal',
                'discount'        => 'Desconto',
                'tax'             => 'Imposto',
                'adjustment'      => 'Ajuste',
                'grand-total'     => 'Total Geral',
                'delete'          => 'Excluir',
                'edit'            => 'Editar',
                'download'        => 'Baixar',
                'destroy-success' => 'Orçamento excluído com sucesso.',
                'empty-title'     => 'Nenhum Orçamento Encontrado',
                'empty-info'      => 'Nenhum Orçamento Encontrado para este Lead',
                'add-btn'         => 'Adicionar Orçamento',

            ],

            'products' => [
                'product-name' => 'Nome do Produto',
                'quantity'     => 'Quantidade',
                'price'        => 'Preço',
                'amount'       => 'Valor',
                'action'       => 'Ação',
                'add-more'     => 'Adicionar Mais',
                'total'        => 'Total',
                'empty-title'  => 'Nenhum Produto Encontrado',
                'empty-info'   => 'Nenhum Produto Encontrado para este Lead',
                'add-product'  => 'Adicionar Produto',

            ],

            'persons' => [
                'title'     => 'Sobre Pessoas',
                'job-title' => ':job_title at :organization',
            ],

            'stages' => [
                'won-lost'       => 'Ganho/Perda',
                'won'            => 'Ganho',
                'lost'           => 'Perda',
                'need-more-info' => 'Precisa de Mais Detalhes',
                'closed-at'      => 'Fechado Em',
                'won-value'      => 'Valor Ganho',
                'lost-reason'    => 'Razão da Perda',
                'save-btn'       => 'Salvar',

            ],

            'tags' => [
                'create-success'  => 'Tag criada com sucesso.',
                'destroy-success' => 'Tag excluída com sucesso.',

            ],
        ],
    ],

    'configuration' => [
        'index' => [
            'back'         => 'Voltar',
            'save-btn'     => 'Salvar Configuração',
            'save-success' => 'Configuração salva com sucesso.',
            'search'       => 'Buscar',
            'title'        => 'Configuração',


            'general'  => [
                'title'   => 'Geral',
                'info'    => 'Configuração geral',

                'general' => [
                    'title'           => 'Geral',
                    'info'            => 'Atualize suas configurações gerais aqui.',
                    'locale-settings' => [
                        'title'       => 'Configurações de Localidade',
                        'title-info'  => 'Define o idioma utilizado na interface do usuário, como inglês (en), francês (fr) ou japonês (ja).',
                    ],
                ],
            ],
        ],
    ],

    'dashboard' => [
        'index' => [
            'title' => 'Painel',

            'revenue' => [
                'lost-revenue' => 'Receita perdida',
                'won-revenue'  => 'Receita ganha',
            ],

            'over-all' => [
                'average-lead-value'    => 'Valor Médio do Lead',
                'total-leads'           => 'Total de Leads',
                'average-leads-per-day' => 'Média de Leads por Dia',
                'total-quotations'      => 'Total de Cotações',
                'total-persons'         => 'Total de Pessoas',
                'total-organizations'   => 'Total de Organizações',

            ],

            'total-leads' => [
                'title' => 'Leads',
                'total' => 'Total de Leads',
                'won'   => 'Leads Ganhos',
                'lost'  => 'Leads Perdidos',

            ],

            'revenue-by-sources' => [
                'title'       => 'Receita por Fontes',
                'empty-title' => 'Nenhum Dado Disponível',
                'empty-info'  => 'Nenhum dado disponível para o intervalo selecionado',

            ],

            'revenue-by-types' => [
                'title'       => 'Receita por Tipos',
                'empty-title' => 'Nenhum Dado Disponível',
                'empty-info'  => 'Nenhum dado disponível para o intervalo selecionado',

            ],

            'top-selling-products' => [
                'title'       => 'Produtos Mais Vendidos',
                'empty-title' => 'Nenhum Produto Encontrado',
                'empty-info'  => 'Nenhum produto disponível para o intervalo selecionado',

            ],

            'top-persons' => [
                'title'       => 'Principais Pessoas',
                'empty-title' => 'Nenhuma Pessoa Encontrada',
                'empty-info'  => 'Nenhuma pessoa disponível para o intervalo selecionado',

            ],

            'open-leads-by-states' => [
                'title'       => 'Leads Abertos por Estados',
                'empty-title' => 'Nenhum Dado Disponível',
                'empty-info'  => 'Nenhum dado disponível para o intervalo selecionado',

            ],
        ],
    ],

    'layouts' => [
        'app-version'          => 'Versão : :version',
        'dashboard'            => 'Painel',
        'leads'                => 'Leads',
        'quotes'               => 'Cotações',
        'quote'                => 'Cotação',
        'mail'                 => [
            'title'   => 'Correio',
            'compose' => 'Compor',
            'inbox'   => 'Caixa de Entrada',
            'draft'   => 'Rascunho',
            'outbox'  => 'Caixa de Saída',
            'sent'    => 'Enviado',
            'trash'   => 'Lixeira',
            'setting' => 'Configurações',
        ],
        'activities'           => 'Atividades',
        'contacts'             => 'Contatos',
        'persons'              => 'Pessoas',
        'person'               => 'Pessoa',
        'organizations'        => 'Organizações',
        'organization'         => 'Organização',
        'products'             => 'Produtos',
        'product'              => 'Produto',
        'settings'             => 'Configurações',
        'user'                 => 'Usuário',
        'user-info'            => 'Gerencie todos os seus usuários e suas permissões no CRM, o que eles têm permissão para fazer.',
        'groups'               => 'Grupos',
        'groups-info'          => 'Adicione, edite ou exclua grupos no CRM',
        'roles'                => 'Funções',
        'role'                 => 'Função',
        'roles-info'           => 'Adicione, edite ou exclua funções no CRM',
        'users'                => 'Usuários',
        'users-info'           => 'Adicione, edite ou exclua usuários no CRM',
        'lead'                 => 'Lead',
        'lead-info'            => 'Gerencie todas as configurações de leads no CRM',
        'pipelines'            => 'Funis',
        'pipelines-info'       => 'Adicione, edite ou exclua funis no CRM',
        'sources'              => 'Fontes',
        'sources-info'         => 'Adicione, edite ou exclua fontes no CRM',
        'types'                => 'Tipos',
        'types-info'           => 'Adicione, edite ou exclua tipos no CRM',
        'automation'           => 'Automação',
        'automation-info'      => 'Gerencie todas as configurações de automação no CRM',
        'attributes'           => 'Atributos',
        'attribute'            => 'Atributo',
        'attributes-info'      => 'Adicione, edite ou exclua atributos no CRM',
        'email-templates'      => 'Modelos de E-mail',
        'email'                => 'E-mail',
        'email-templates-info' => 'Adicione, edite ou exclua modelos de e-mail no CRM',
        'workflows'            => 'Fluxos de Trabalho',
        'workflows-info'       => 'Adicione, edite ou exclua fluxos de trabalho no CRM',
        'other-settings'       => 'Outras Configurações',
        'other-settings-info'  => 'Gerencie todas as suas configurações extras no CRM',
        'tags'                 => 'Etiquetas',
        'tags-info'            => 'Adicione, edite ou exclua etiquetas no CRM',
        'my-account'           => 'Minha Conta',
        'sign-out'             => 'Sair',
        'back'                 => 'Voltar',
        'name'                 => 'Nome',
        'configuration'        => 'Ajustes',
        'activities'           => 'Atividades',
        'howdy'                => 'Oi!',
        'warehouses'           => 'Armazéns',
        'warehouse'            => 'Armazém',
        'warehouses-info'      => 'Adicione, edite ou exclua armazéns no CRM',

    ],

    'user' => [
        'account' => [
            'name'                  => 'Nome',
            'email'                 => 'E-mail',
            'password'              => 'Senha',
            'my_account'            => 'Minha conta',
            'update_details'        => 'Atualizar Detalhes',
            'current_password'      => 'Senha atual',
            'confirm_password'      => 'Confirmar senha',
            'password-match'        => 'A senha atual não corresponde.',
            'account-save'          => 'Alterações da conta salvas com sucesso.',
            'permission-denied'     => 'Permissão Negada',
            'remove-image'          => 'Remover Imagem',
            'upload_image_pix'      => 'Carregar uma Imagem de Perfil (100px x 100px)',
            'upload_image_format'   => 'em formato PNG ou JPG',
            'image_upload_message'  => 'Somente imagens (.jpeg, .jpg, .png, ..) são permitidas.',

        ],
    ],

    'emails' => [
        'common' => [
            'dear'   => 'Caro(a) :name',
            'cheers' => 'Atenciosamente,</br>Equipe :app_name',

        ],
    ],

    'errors' => [
        '401' => 'Você não está autorizado a acessar esta página',
    ],
];
