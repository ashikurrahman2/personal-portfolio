      <script src="{{asset('/')}}backend/assets/js/plugins/apexcharts.min.js"></script>
    <script src="{{asset('/')}}backend/assets/js/pages/dashboard-default.js"></script><!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="{{asset('/')}}backend/assets/js/plugins/popper.min.js"></script>
    <script src="{{asset('/')}}backend/assets/js/plugins/simplebar.min.js"></script>
    <script src="{{asset('/')}}backend/assets/js/plugins/bootstrap.min.js"></script>
    <script src="{{asset('/')}}backend/assets/js/fonts/custom-font.js"></script>
    <script src="{{asset('/')}}backend/assets/js/pcoded.js"></script>
    <script src="{{asset('/')}}backend/assets/js/plugins/feather.min.js"></script>
    <script src="{{asset('/')}}backend/assets/js/plugins/uppy.min.js"></script>


    <script>
        const Tus = Uppy.Tus;
        const DragDrop = Uppy.DragDrop;
        const ProgressBar = Uppy.ProgressBar;
        const StatusBar = Uppy.StatusBar;
        const FileInput = Uppy.FileInput;
        const Informer = Uppy.Informer;
        const Dashboard = Uppy.Dashboard;
        const Dropbox = Uppy.Dropbox;
        const GoogleDrive = Uppy.GoogleDrive;
        const Instagram = Uppy.Instagram;
        const Webcam = Uppy.Webcam;
        // Function for displaying uploaded files
        const onUploadSuccess = (elForUploadedFiles) =>
            (file, response) => {
                const url = response.uploadURL
                const fileName = file.name

                const li = document.createElement('li')
                const a = document.createElement('a')
                a.href = url
                a.target = '_blank'
                a.appendChild(document.createTextNode(fileName))
                li.appendChild(a)

                document.querySelector(elForUploadedFiles).appendChild(li)
            }
            (function () {
                var id = '#pc-uppy-1';
                var options = {
                    proudlyDisplayPoweredByUppy: false,
                    target: id,
                    inline: true,
                    replaceTargetContent: true,
                    showProgressDetails: true,
                    note: 'No filetype restrictions.',
                    height: 470,
                    metaFields: [{
                            id: 'name',
                            name: 'Name',
                            placeholder: 'file name'
                        },
                        {
                            id: 'caption',
                            name: 'Caption',
                            placeholder: 'describe what the image is about'
                        }
                    ],
                    browserBackButtonClose: true
                }
                var uppyDashboard = new Uppy.Uppy({
                    autoProceed: true,
                    restrictions: {
                        maxFileSize: 1000000, // 1mb
                        maxNumberOfFiles: 5,
                        minNumberOfFiles: 1
                    }
                });
                uppyDashboard.use(Dashboard, options);
                uppyDashboard.use(Tus, {
                    endpoint: 'https://master.tus.io/files/'
                });
                uppyDashboard.use(GoogleDrive, {
                    target: Dashboard,
                    companionUrl: 'https://companion.uppy.io'
                });
                uppyDashboard.use(Dropbox, {
                    target: Dashboard,
                    companionUrl: 'https://companion.uppy.io'
                });
                uppyDashboard.use(Instagram, {
                    target: Dashboard,
                    companionUrl: 'https://companion.uppy.io'
                });
                uppyDashboard.use(Webcam, {
                    target: Dashboard
                });
            })();

        (function () {
            var id = '#pc-uppy-6';
            var options = {
                proudlyDisplayPoweredByUppy: false,
                target: id + ' .pc-uppy-dashboard',
                inline: false,
                replaceTargetContent: true,
                showProgressDetails: true,
                note: 'No filetype restrictions.',
                height: 470,
                metaFields: [{
                        id: 'name',
                        name: 'Name',
                        placeholder: 'file name'
                    },
                    {
                        id: 'caption',
                        name: 'Caption',
                        placeholder: 'describe what the image is about'
                    }
                ],
                browserBackButtonClose: true,
                trigger: id + ' .pc-uppy-btn'
            }
            var uppyDashboard = new Uppy.Uppy({
                autoProceed: true,
                restrictions: {
                    maxFileSize: 1000000, // 1mb
                    maxNumberOfFiles: 5,
                    minNumberOfFiles: 1
                }
            });
            uppyDashboard.use(Dashboard, options);
            uppyDashboard.use(Tus, {
                endpoint: 'https://master.tus.io/files/'
            });
            uppyDashboard.use(GoogleDrive, {
                target: Dashboard,
                companionUrl: 'https://companion.uppy.io'
            });
            uppyDashboard.use(Dropbox, {
                target: Dashboard,
                companionUrl: 'https://companion.uppy.io'
            });
            uppyDashboard.use(Instagram, {
                target: Dashboard,
                companionUrl: 'https://companion.uppy.io'
            });
            uppyDashboard.use(Webcam, {
                target: Dashboard
            });
        })();

        (function () {
            const pc_uppy_3 = new Uppy.Uppy({
                debug: true,
                autoProceed: true
            })
            pc_uppy_3
                .use(DragDrop, {
                    target: '.pc-uppy-3 .for-DragDrop'
                })
                .use(Tus, {
                    endpoint: 'https://tusd.tusdemo.net/files/'
                })
                .use(ProgressBar, {
                    target: '.pc-uppy-3 .for-ProgressBar',
                    hideAfterFinish: false
                })
                .on('upload-success', onUploadSuccess('.pc-uppy-3 .uploaded-files ol'))
        })();

        (function () {
            const pc_uppy_4 = new Uppy.Uppy({
                debug: true,
                autoProceed: false
            })
            pc_uppy_4
                .use(DragDrop, {
                    target: '.pc-uppy-4 .for-DragDrop'
                })
                .use(Tus, {
                    endpoint: 'https://tusd.tusdemo.net/files/'
                })
                .use(ProgressBar, {
                    target: '.pc-uppy-4 .for-ProgressBar',
                    hideAfterFinish: false
                })
                .on('upload-success', onUploadSuccess('.pc-uppy-4 .uploaded-files ol'))

            const uploadBtn = document.querySelector('.pc-uppy-4 button.upload-button')
            uploadBtn.addEventListener('click', function () {
                pc_uppy_4.upload()
            })
        })();
        (function () {
            const pc_uppy_5 = new Uppy.Uppy({
                debug: true,
                autoProceed: true
            })
            pc_uppy_5
                .use(FileInput, {
                    target: '.UppyInput',
                    pretty: false
                })
                .use(Tus, {
                    endpoint: 'https://tusd.tusdemo.net/files/'
                })
                .use(StatusBar, {
                    target: '.UppyInput-Progress',
                    hideUploadButton: true,
                    hideAfterFinish: false
                });
            document.querySelector(".uppy-FileInput-input").classList.add('form-control');
        })();
    </script><!-- [Page Specific JS] end -->
    <script>
        layout_change('light');
    </script>
    <script>
        layout_sidebar_change('dark');
    </script>
    <script>
        layout_header_change('dark');
    </script>
    <script>
        change_box_container('false');
    </script>
    <script>
        layout_caption_change('true');
    </script>
    <script>
        layout_rtl_change('false');
    </script>
    <script>
        preset_change("preset-1");
    </script>