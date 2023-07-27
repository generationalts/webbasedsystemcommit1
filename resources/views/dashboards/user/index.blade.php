@extends('dashboards/user/layouts/userlayout')
@section('content')
    @if (session('success'))
        <div class="position-fixed top-0 start-50 translate-middle-x mt-3" style="z-index: 9999;">
            <div class="alert alert-success d-flex align-items-center justify-content-center" role="alert">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
            </div>
        </div>
    @endif
    <div class="greeting">
        Welcome, {{ Auth::user()->name }}!
    </div>

    <div class="quote">
        {{ $randomQuote }}
    </div>

    <div class=card-body>
        <div class="modal fade" id=exampleModalLong tabindex=-1 role=dialog aria-labelledby=exampleModalLongTitle
            aria-hidden=true>
            <div class=modal-dialog role=document>
                <div class=modal-content>
                    <div class=modal-header>
                        <h5 class=modal-title id=exampleModalLongTitle>Wrtie a message</h5>
                        <button type=button class=close data-dismiss=modal aria-label=Close>
                            <span aria-hidden=true>&times;</span>
                        </button>
                    </div>
                    <div class=modal-body>
                        <form action="{{ route('notifications.store') }}" method="post" class="form-group">
                            @csrf
                            <div class="form-group">
                                <label for="recipient">Recipient:</label>
                                <select name="recipient" id="recipient" class="form-control">
                                    <option value="all">All Users</option>
                                    @foreach ($users as $user)
                                        @if ($user->role == 1 || $user->role == 0 || $user->role == 2)
                                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message">Message:</label>
                                <textarea name="message" id="message" rows="4" class="form-control"></textarea>
                            </div>


                    </div>
                    <div class=modal-footer>
                        <button type=button class="btn btn-secondary" data-dismiss=modal>Close</button>
                        <input type="submit" value="Send" class="btn btn-primary">
                        </form>

                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            @foreach ($dailymotives as $dailymotive)
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top img-thumbnail" src="{{ asset('images/' . $dailymotive->image) }}" alt="Verse Image">
                    <div class="card-body">
                        <h5 class="card-title">Verse</h5>
                        <p class="card-text">{{ $dailymotive->verse }}</p>
                        <h5 class="card-title">Encouragement</h5>
                        <p class="card-text">{{ $dailymotive->encouragement }}</p>
                        <div class="comments-section">
                            <h3 style="font-size: 24px; font-weight: bold; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
                                Discussions</h3>

                                <!-- Comments will be dynamically added here -->
                                @foreach ($dailymotive->comments as $comment)
                                <div class="comment">
                                    <p class="card-text">{{ $comment->user->name }}</p>
                                    <p class="card-text">{{ $comment->comment }}</p>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="like-container">
                                                    <i class="fa fa-heart{{ $comment->isLikedBy(auth()->user()) ? ' liked' : '' }}"
                                                        aria-hidden="true"
                                                        onclick="likeComment({{ $comment->id }})"
                                                        data-comment="{{ $comment->id }}"
                                                        data-likeable-type="comment"
                                                        data-likeable-id="{{ $comment->id }}"></i>
                                                    <span id="like-count-{{ $comment->id }}">{{ $comment->likes_count }}</span>
                                                </div>
                                                <div>
                                                    <i class="fa fa-reply" aria-hidden="true"
                                                        onclick="toggleReplyForm({{ $comment->id }})"></i>
                                                    <span>{{ $comment->commentreplies->count() }}</span>
                                                </div>
                                            </div>
                                            <form id="reply-form-{{ $comment->id }}" class="ml-4 mt-2 mb-2" style="display: none;"
                                                action="{{ route('commentreplies.store', [$dailymotive->id, auth()->user()->id, $comment->id]) }}"
                                                method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <textarea name="reply" class="form-control" placeholder="Leave a reply"></textarea>
                                                </div>
                                                <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                            <div class="comment-replies">
                                                @foreach ($comment->commentreplies as $reply)
                                                    <div class="reply">
                                                        <p>{{ $reply->reply }}</p>
                                                        <p class="card-text">By {{ $reply->user->name }}</p>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <a href="javascript:void(0);" onclick="toggleCommentReplies(event)">View All Comments</a>
                                        </div>

                                @endforeach
                                <form action="{{ route('comments.store', [$dailymotive->id, auth()->user()->id]) }}"
                                    method="post">
                                    @csrf
                                    <div class="form-group">
                                        <textarea name="comment" class="form-control" placeholder="Leave a comment"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                    </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script>
        function toggleCommentReplies(event) {
            event.preventDefault();
            var comment = event.target.parentNode;
            var commentReplies = comment.querySelector('.comment-replies');
            commentReplies.style.display = commentReplies.style.display === 'none' ? 'block' : 'none';
        }
    </script>

    <script>
        function toggleReplyForm(commentId) {
            console.log('toggleReplyForm called with comment ID: ', commentId);
            var form = document.getElementById('reply-form-' + commentId);
            if (form.style.display === 'none') {
                form.style.display = 'block';
            } else {
                form.style.display = 'none';
            }
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function likeComment(commentId) {
            var likeIcon = document.querySelector('i[data-comment="' + commentId + '"]');
            var likeCount = document.getElementById('like-count-' + commentId);

            // Send an AJAX request to the server to like or unlike the comment
            $.ajax({
                url: '{{ route('likes.store') }}',
                method: 'POST',
                data: {
                    likeable_type: 'comment',
                    likeable_id: commentId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // Update the like icon and count based on the server's response
                    if (response.liked) {
                        likeIcon.classList.add('liked');
                        likeCount.innerText = response.likeCount;
                    } else {
                        likeIcon.classList.remove('liked');
                        likeCount.innerText = response.likeCount;
                    }
                }
            });
        }
    </script>

@endsection
