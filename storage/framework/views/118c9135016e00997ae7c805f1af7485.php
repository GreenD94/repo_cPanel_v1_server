<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    //Icons size for sidebar
    function updateSidebarIconClasses() {
        const sidebarIcons = document.querySelectorAll('.fi-sidebar-item-icon');

        sidebarIcons.forEach(icon => {
            icon.classList.remove('h-6', 'w-6');

            icon.classList.add('h-4', 'w-4');
            //              or
            // icon.style.width = '1.01rem';
            // icon.style.height = '1.01rem';
        });
    }
    updateSidebarIconClasses();
    //End Icons size for sidebar

    //Close dropdown on click of anchor tag
    document.querySelectorAll('a').forEach(function(anchor) {
        anchor.addEventListener('click', function() {
            const dropdownPanel = anchor.closest('.fi-dropdown-panel');
            if (dropdownPanel) {
                dropdownPanel.style.display = 'none';
            }
        });
    });
    //End close dropdown on click of anchor tag
    //hover for links
    if (document.documentElement.classList.contains('dark')) {
        document.styleSheets[0].insertRule(`
                .hoverLink:hover {
                    filter: brightness(0.7);
                }
            `, 0);
    } else {
        document.styleSheets[0].insertRule(`
                .hoverLink:hover {
                    filter: brightness(0.6);
                }
            `, 0);
    }


    function razorPay(e, status, record, amount,currency = null) {

        //patient bill
        if (status == 5) {
            e.preventDefault();
            let options = {
                'key': "<?php echo e(getPaymentCredentials('razorpay_key')); ?>",
                'amount': amount * 100,
                'currency': 'INR',
                'name': "<?php echo e(getAppName()); ?>",
                'order_id': '',
                'description': '',
                'notes': {
                    'bill_id': record
                },
                'image': '<?php echo e(getLogoUrl()); ?>',
                'callback_url': "<?php echo e(route('razorpay.payment.success')); ?>",
                'prefill': {
                    'email': "<?php echo e(getLoggedInUser()->email); ?>",
                    'name': "<?php echo e(getLoggedInUser()->full_name); ?>",
                },
                'readonly': {
                    'name': true,
                    'email': true,
                },
                'modal': {
                    'ondismiss': function() {
                        window.location.href = "<?php echo e(route('razorpay.payment.failed')); ?>";
                    },
                },
            }

            let razorPay = new Razorpay(options);
            razorPay.open();
            razorPay.on("payment.failed", function() {
                window.location.href = "<?php echo e(route('razorpay.payment.failed')); ?>";
            });
        }

        //ipd patient bill payment
        else if (status == 6) {
                let options = {
                    key: "<?php echo e(getPaymentCredentials('razorpay_key')); ?>",
                    amount: amount * 100,
                    currency: '<?php echo e(strtoupper(getCurrentCurrency())); ?>',
                    name: "<?php echo e(getAppName()); ?>",
                    description: '',
                    notes: {
                        ipd_patient_department_id: record
                    },
                    image: '<?php echo e(getLogoUrl()); ?>',
                    callback_url: "<?php echo e(route('ipd.razorpay.success')); ?>",
                    prefill: {
                        email: "<?php echo e(getLoggedInUser()->email); ?>",
                        name: "<?php echo e(getLoggedInUser()->full_name); ?>",
                    },
                    readonly: {
                        name: true,
                        email: true,
                    },
                    modal: {
                        ondismiss: function() {
                              window.location.href = "<?php echo e(route('ipd.razorpay.failed')); ?>";
                        },
                    },
                };

                let razorPay = new Razorpay(options);
                razorPay.open();
                razorPay.on("payment.failed", function () {
                    window.location.href = "<?php echo e(route('ipd.razorpay.failed')); ?>";
                });
            }

            //appointment
            else if (status == 7) {
                let options = {
                    key: "<?php echo e(getPaymentCredentials('razorpay_key')); ?>",
                    amount: amount * 100,
                    currency: '<?php echo e(strtoupper(getCurrentCurrency())); ?>',
                    name: "<?php echo e(getAppName()); ?>",
                    description: '',
                    notes: {
                        appointment_id: record
                    },
                    image: '<?php echo e(getLogoUrl()); ?>',
                    callback_url: "<?php echo e(route('appointment.razorpay.success')); ?>",
                    prefill: {
                        email: "<?php echo e(getLoggedInUser()->email); ?>",
                        name: "<?php echo e(getLoggedInUser()->full_name); ?>",
                    },
                    readonly: {
                        name: true,
                        email: true,
                    },
                    modal: {
                        ondismiss: function() {
                              window.location.href = "<?php echo e(route('appointment.razorpay.failed')); ?>";
                        },
                    },
                };

                let razorPay = new Razorpay(options);
                razorPay.open();
                razorPay.on("payment.failed", function () {
                    window.location.href = "<?php echo e(route('appointment.razorpay.failed')); ?>";
                });
            }

            //purchase medicine
            else if (status == 8) {
                let options = {
                    key: "<?php echo e(getPaymentCredentials('razorpay_key')); ?>",
                    amount: amount * 100,
                    currency: '<?php echo e(strtoupper(getCurrentCurrency())); ?>',
                    name: "<?php echo e(getAppName()); ?>",
                    description: '',
                    notes: {
                        purchase_no: record
                    },
                    image: '<?php echo e(getLogoUrl()); ?>',
                    callback_url: "<?php echo e(route('purchase.medicine.razorpay.success')); ?>",
                    prefill: {
                        email: "<?php echo e(getLoggedInUser()->email); ?>",
                        name: "<?php echo e(getLoggedInUser()->full_name); ?>",
                    },
                    readonly: {
                        name: true,
                        email: true,
                    },
                    modal: {
                        ondismiss: function() {
                            window.location.href = "<?php echo e(route('purchase.medicine.razorpay.fail')); ?>";
                        },
                    },
                };

                let razorPay = new Razorpay(options);
                razorPay.open();
                razorPay.on("payment.failed", function () {
                    window.location.href = "<?php echo e(route('purchase.medicine.razorpay.fail')); ?>";
                });
            }

            //medicines bill
            else if (status == 9) {
                let options = {
                    key: "<?php echo e(getPaymentCredentials('razorpay_key')); ?>",
                    amount: amount * 100,
                    currency: '<?php echo e(strtoupper(getCurrentCurrency())); ?>',
                    name: "<?php echo e(getAppName()); ?>",
                    description: '',
                    notes: {
                        purchase_no: record
                    },
                    image: '<?php echo e(getLogoUrl()); ?>',
                    callback_url: "<?php echo e(route('medicine.bill.razorpay.success')); ?>",
                    prefill: {
                        email: "<?php echo e(getLoggedInUser()->email); ?>",
                        name: "<?php echo e(getLoggedInUser()->full_name); ?>",
                    },
                    readonly: {
                        name: true,
                        email: true,
                    },
                    modal: {
                        ondismiss: function() {
                            window.location.href = "<?php echo e(route('medicine.bill.razorpay.failed')); ?>";
                        },
                    },
                };

                let razorPay = new Razorpay(options);
                razorPay.open();
                razorPay.on("payment.failed", function () {
                    window.location.href = "<?php echo e(route('medicine.bill.razorpay.failed')); ?>";
                });
            }

            //subscription
            else if (status == 10) {
                let options = {
                    key: "<?php echo e(getPaymentCredentials('razorpay_key')); ?>",
                    amount: amount * 100,
                    currency: currency,
                    name: "<?php echo e(getAppName()); ?>",
                    description: '',
                    notes: {
                        subscription_id: record
                    },
                    image: '<?php echo e(getLogoUrl()); ?>',
                    callback_url: "<?php echo e(route('razorpay.success')); ?>",
                    prefill: {
                        email: "<?php echo e(getLoggedInUser()->email); ?>",
                        name: "<?php echo e(getLoggedInUser()->full_name); ?>",
                    },
                    readonly: {
                        name: true,
                        email: true,
                    },
                    modal: {
                        ondismiss: function() {
                            window.location.href = "<?php echo e(route('razorpay.failed.modal')); ?>";
                        },
                    },
                };

                let razorPay = new Razorpay(options);
                razorPay.open();
                razorPay.on("payment.failed", function () {
                    window.location.href = "<?php echo e(route('razorpay.failed.modal')); ?>";
                });
            }
        return;
    }

    // //view patient queue
    window.addEventListener('open-queue-page', event => {
        const url = event.detail.url;
        window.open(url, '_blank');
    });

</script>

<?php /**PATH /home/vzaiylnbi7hv/public_html/resources/views/layout/scripts.blade.php ENDPATH**/ ?>