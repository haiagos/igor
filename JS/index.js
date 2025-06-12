document.addEventListener('DOMContentLoaded', function() {
    // Tab navigation
    const tabs = document.querySelectorAll('.nav-link');
    const prevBtn = document.getElementById('prevTab');
    const nextBtn = document.getElementById('nextTab');
    let currentTab = 0;

    function updateTabButtons() {
        prevBtn.style.display = currentTab === 0 ? 'none' : 'block';
        nextBtn.textContent = currentTab === tabs.length - 1 ? 'Enviar' : 'Próximo';
    }

    function showTab(index) {
        tabs.forEach(tab => tab.classList.remove('active'));
        document.querySelectorAll('.tab-pane').forEach(pane => pane.classList.remove('show', 'active'));
        
        tabs[index].classList.add('active');
        document.querySelector(tabs[index].getAttribute('data-bs-target')).classList.add('show', 'active');
        currentTab = index;
        updateTabButtons();
    }

    prevBtn.addEventListener('click', () => {
        if (currentTab > 0) {
            showTab(currentTab - 1);
        }
    });

    nextBtn.addEventListener('click', () => {
        if (currentTab < tabs.length - 1) {
            showTab(currentTab + 1);
        } else {
            // Handle form submission
            const forms = document.querySelectorAll('form');
            let isValid = true;

            forms.forEach(form => {
                const requiredFields = form.querySelectorAll('[required]');
                requiredFields.forEach(field => {
                    if (!field.value) {
                        isValid = false;
                        field.classList.add('is-invalid');
                    } else {
                        field.classList.remove('is-invalid');
                    }
                });
            });

            if (isValid) {
                // Here you would typically submit the form data
                alert('Formulário enviado com sucesso!');
            } else {
                alert('Por favor, preencha todos os campos obrigatórios.');
            }
        }
    });

    // Initialize tab buttons
    updateTabButtons();

    // Add Brazilian states to the select element
    const states = [
        'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG',
        'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO'
    ];
    
    const stateSelect = document.getElementById('state');
    if (stateSelect) {
        states.forEach(state => {
            const option = document.createElement('option');
            option.value = state;
            option.textContent = state;
            stateSelect.appendChild(option);
        });
    }

    // Add input masks
    const cpfInput = document.getElementById('cpf');
    const phoneInput = document.getElementById('phone');
    const whatsappInput = document.getElementById('whatsapp');
    const cepInput = document.getElementById('cep');

    if (cpfInput) {
        cpfInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length <= 11) {
                value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
                e.target.value = value;
            }
        });
    }

    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length <= 11) {
                value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
                e.target.value = value;
            }
        });
    }

    if (whatsappInput) {
        whatsappInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length <= 11) {
                value = value.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
                e.target.value = value;
            }
        });
    }

    if (cepInput) {
        cepInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length <= 8) {
                value = value.replace(/(\d{5})(\d{3})/, '$1-$2');
                e.target.value = value;
            }
        });
    }
});
