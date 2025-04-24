@include('admin.blocks.header')
<div class="container body">
    <div class="main_container">
        @include('admin.blocks.sidebar')

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">

                <div class="page-title">
                    <div class="title_left">
                        <h3>Liên hệ</h3>
                    </div>

                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Tại đây, bạn có thể xem và quản lý các thông tin liên lạc từ khách hàng, trả lời câu
                                    hỏi, <br> và theo dõi các trao đổi để cải thiện dịch vụ.</h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="row">
                                    <div class="col-sm-3 mail_list_column">
                                        <label for="" class="badge bg-green"
                                            style="width: 100%;line-height: 2;font-size: 16px;">Liên hệ khách
                                            hàng</label>
                                        @if ($contacts->isEmpty())
                                            <div class="text-center mt-3">
                                                <span class="text-muted">Không có tin nhắn nào.</span>
                                            </div>
                                        @else
                                            @foreach ($contacts as $contact)
                                                <a href="javascript:void(0)" class="contact-item"
                                                    data-name="{{ $contact->fullName }}"
                                                    data-email="{{ $contact->email }}"
                                                    data-message="{{ $contact->message }}"
                                                    data-contactid="{{ $contact->contactId }}">
                                                    <div class="mail_list">
                                                        <div class="left">
                                                            <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                                                        </div>
                                                        <div class="right">
                                                            <h3>{{ $contact->fullName }}
                                                                <small>{{ $contact->phoneNumber }}</small>
                                                            </h3>
                                                            <p class="text-contact-truncate">{{ $contact->message }}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @endif

                                    </div>
                                    <!-- /MAIL LIST -->

                                    <!-- CONTENT MAIL -->
                                    <div class="col-sm-9 mail_view">
                                        <div class="inbox-body">
                                            @if ($contacts->isNotEmpty())
                                                @php $first = $contacts->first(); @endphp
                                                <div class="sender-info" style="border-bottom: 1px solid #ddd">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <strong>{{ $first->fullName }}</strong>
                                                            <span>{{ $first->email }}</span> to
                                                            <b>me</b>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="view-mail">
                                                    <p>{{ $first->message }}</p>
                                                    <div class="btn-group">
                                                        <button id="compose" class="btn btn-sm btn-primary" type="button">
                                                            <i class="fa fa-reply"></i> Reply
                                                        </button>
                                    
                                                        <form action="{{ route('admin.contact.delete', $first->contactId) }}"
                                                              method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-sm btn-danger" type="submit"
                                                                    onclick="return confirm('Bạn có chắc muốn xóa tin nhắn này không?')"
                                                                    data-toggle="tooltip" data-placement="top" title="Trash">
                                                                <i class="fa fa-trash-o"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            @else
                                                <p class="text-muted mt-4">Không có nội dung tin nhắn nào để hiển thị.</p>
                                            @endif
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /page content -->
        </div>
    </div>

    <!-- compose -->
    <div class="compose col-md-6  ">
        <div class="compose-header">
            Phản hồi liên hệ
            <button type="button" class="close compose-close">
                <span>×</span>
            </button>
        </div>

        <div class="compose-body">
            <div id="editor-contact" class="editor-wrapper"></div>
        </div>

        <div class="compose-footer">
            <button id="" class="send-reply-contact btn btn-sm btn-success" type="button"
                data-url="{{ route('admin.reply-contact') }}">Gửi</button>
        </div>
    </div>
    <!-- /compose -->

    @include('admin.blocks.footer')
