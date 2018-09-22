
        {{--TOPBAR--}}
        <div id="top">
            <div class="container text-right">
                <div class="row">
                    <div class="col-lg-12 text-right">
                        <ul class="menu list-inline mb-0">
                            <li class="list-inline-item"><a href="#" data-toggle="modal" data-target="#login-modal">Entrar</a></li>
                            <li class="list-inline-item"><a href="register.html">Registrar</a></li>
                            <li class="list-inline-item"><a href="contact.html">Contato</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Login de Cliente</h5>
                            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <form action="customer-orders.html" method="post">
                                <div class="form-group">
                                    <input id="email-modal" type="text" placeholder="E-mail" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input id="password-modal" type="password" placeholder="Senha" class="form-control">
                                </div>
                                <p class="text-center">
                                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Entrar</button>
                                </p>
                            </form>
                            <p class="text-center text-muted">Não é registrado?</p>
                            <p class="text-center text-muted"><a href="register.html"><strong>Registre-se</strong></a>! É fácil e leva menos de 1 minuto!</p>
                        </div>
                    </div>
                </div>
            </div>
            {{--TOP BAR END--}}
        </div>

@push('scripts')
    <script>
        $('#login-modal').on('shown.bs.modal', function() {
            $('#email-modal').trigger('focus');
        });

        // implementar login via api
    </script>
@endpush

