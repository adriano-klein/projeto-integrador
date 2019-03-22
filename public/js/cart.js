var button = document.querySelector('#botaoFinalizar');
var total = document.getElementById('teste').innerText;
var total_formt = total.replace(/[^\d]+/g,'');

       
        // Abrir o modal ao clicar no botão
        button.addEventListener('click', function() {
            
            // inicia a instância do checkout
            var checkout = new PagarMeCheckout.Checkout({
                encryption_key:'colocar chave da API',
                success: function(data) {
<<<<<<< HEAD
                    console.log('olha aqui cara', data);
=======
                    fetch(`https://api.pagar.me/1/transactions/${data.token}/capture`,{
                        method: 'POST',
                        headers:{
                            'Accept': 'application/jason',
                            'Content-Type': 'application/jason',
                        },
                        body:{
                            'api_key': 'colocar chave da API',
                            'amount': total_formt
                        }
                        
                    }).then((res) => {res.json()}).yhen((data) => {console.log(data)});

                    

>>>>>>> 8e30c42d26b09a7355065c0b9cc0941bb037f2af
                },
                error: function(err) {
                    console.log(err);
                },
                close: function() {
                    console.log('The modal has been closed.');
                }
            });
            
            // Obs.: é necessário passar os valores boolean como string
            checkout.open({
                amount: total_formt,
                buttonText: 'Pagar',
                buttonClass: 'botao-pagamento',
                customerData: 'false',
                createToken: 'true',
                paymentMethods: 'credit_card',
                customer: {
                    external_id: '#123456789',
                    name: 'Fulano',
                    type: 'individual',
                    country: 'br',
                    email: 'fulano@email.com',
                    documents: [
                        {
                            type: 'cpf',
                            number: '71404665560',
                        },
                    ],
                    phone_numbers: ['+5511999998888', '+5511888889999'],
                    birthday: '1985-01-01'
                },
                billing: {
                    name: 'Ciclano de Tal',
                    address: {
                        country: 'br',
                        state: 'SP',
                        city: 'São Paulo',
                        neighborhood: 'Fulanos bairro',
                        street: 'Rua dos fulanos',
                        street_number: '123',
                        zipcode: '05170060'
                    }
                },
                shipping: {
                    name: 'Ciclano de Tal',
                    fee: 12345,
                    delivery_date: '2017-12-25',
                    expedited: true,
                    address: {
                        country: 'br',
                        state: 'SP',
                        city: 'São Paulo',
                        neighborhood: 'Fulanos bairro',
                        street: 'Rua dos fulanos',
                        street_number: '123',
                        zipcode: '05170060'
                    }
                },
                items: [
                    {
                        id: '1',
                        title: 'Bola de futebol',
                        unit_price: 12000,
                        quantity: 1,
                        tangible: true
                    },
                    {
                        id: 'a123',
                        title: 'Caderno do Goku',
                        unit_price: 3200,
                        quantity: 3,
                        tangible: true
                    }
                ],
            })
        });