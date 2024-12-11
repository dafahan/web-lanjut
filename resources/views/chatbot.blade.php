


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>JRP</title>
  <link rel="shortcut icon" type="image/png" href="{{asset('/')}}images/logos/favicon.png" />
  <link rel="stylesheet" href="{{asset('/')}}css/styles.min.css" />
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <style>
        .chat-container {
            
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background: #f7f7f7;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        .chat-box {
            max-height: 400px;
            overflow-y: auto;
            margin-bottom: 20px;
            padding-right: 15px;
        }
        .message {
            display: flex;
            margin-bottom: 10px;
        }
        .message.user {
            justify-content: flex-end;
        }
        .message.bot {
            justify-content: flex-start;
        }
        .message .text {
            max-width: 80%;
            padding: 10px;
            border-radius: 10px;
            background-color: #e0e0e0;
        }
        .message.user .text {
            background-color: #007bff;
            color: white;
        }
        .message.bot .text {
            background-color: #f1f1f1;
        }
        .input-area input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .input-area button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .input-area button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
  <!-- Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="{{url('beranda')}}" class="text-nowrap logo-img">
            <img src="{{asset('/')}}images/logo.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('beranda')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{url('pengajuan')}}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Pengajuan</span>
              </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{url('statuspengajuan')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Status Pengajuan</span>
                </a>
              </li>
              <li class="sidebar-item">
                <a class="sidebar-link" href="{{url('chat')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-layout-dashboard"></i>
                  </span>
                  <span class="hide-menu">Chat With JRP Bot</span>
                </a>
              </li>
          </ul>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!-- Sidebar End -->

    <!-- Main wrapper -->
    <div class="body-wrapper">
      <!-- Header Start -->


      <!-- Page Content -->
      <div class="content">
        <div class="container px-4 px-lg-5 mt-5" style="position:relative">
          <!-- Welcome Card -->


    <!-- Insurance Products Section -->
    <div class="chat-container" >

        <h3 class="text-center">Chat with JRP Bot</h3>
        <div class="chat-box" id="chatBox">
            <!-- Chat messages will appear here -->
        </div>
        <div class="input-area">
            <input type="text" id="userMessage" placeholder="Type a message..." />
            <button id="sendMessage">Send</button>
        </div>
    </div>
    
  
  
            
          </div>
        </div>
      </div>

      <!-- Footer and Scripts -->
      <script src="{{asset('/')}}libs/jquery/dist/jquery.min.js"></script>
      <script src="{{asset('/')}}libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="{{asset('/')}}js/sidebarmenu.js"></script>
      <script src="{{asset('/')}}js/app.min.js"></script>
      <script src="{{asset('/')}}libs/apexcharts/dist/apexcharts.min.js"></script>
      <script src="{{asset('/')}}libs/simplebar/dist/simplebar.js"></script>
      <script src="{{asset('/')}}js/dashboard.js"></script>
      <script>
        $(document).ready(function () {
            // Send message to the server
            $('#sendMessage').click(function () {
                var userMessage = $('#userMessage').val();
                if (userMessage) {
                    // Add the user message to the chat box
                    $('#chatBox').append('<div class="message user"><div class="text">' + userMessage + '</div></div>');
                    $('#userMessage').val(''); // Clear input field

                    // Scroll to the bottom
                    $('#chatBox').scrollTop($('#chatBox')[0].scrollHeight);

                    // Send the message to the backend using AJAX
                    $.ajax({
                        url: '{{ url("/chat/send") }}',
                        method: 'POST',
                        data: {
                            message: userMessage,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            // Check if the response contains the expected 'message' key
                            if (response.message) {
                                // Add bot's response, formatted with HTML
                                $('#chatBox').append('<div class="message bot"><div class="text">' + formatBotMessage(response.message) + '</div></div>');
                            } else {
                                // Handle unexpected response structure
                                $('#chatBox').append('<div class="message bot"><div class="text">Sorry, I encountered an error processing your request.</div></div>');
                            }
                            $('#chatBox').scrollTop($('#chatBox')[0].scrollHeight); // Scroll to the bottom
                        },
                        error: function () {
                            $('#chatBox').append('<div class="message bot"><div class="text">Oops! There was an error connecting to the server.</div></div>');
                            $('#chatBox').scrollTop($('#chatBox')[0].scrollHeight);
                        }
                    });

                    // Format bot message (Prettify)
                    function formatBotMessage(message) {
                        return message
                            .replace(/\*\*(.*?)\*\*/g, '<strong>$1</strong>') // Convert **bold** to <strong>
                            .replace(/\*(.*?)\*/g, '<em>$1</em>') // Convert *italic* to <em>
                            .replace(/\n/g, '<br>'); // Convert newlines to <br>
                    }

                }
            });

            // Enable enter key to send message
            $('#userMessage').keypress(function (e) {
                if (e.which === 13) {
                    $('#sendMessage').click();
                }
            });
        });
    </script>
    </div>
  </div>
</body>

</html>
