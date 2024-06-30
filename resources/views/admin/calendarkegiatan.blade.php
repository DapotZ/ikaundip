@extends('admin.layouts.base')

@section('title', 'Data Contact')

@section('content')

    <div>
        <div id='calendar'></div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                locale: 'id',
                events: {
                    url: 'http://127.0.0.1:8000/admin/kegiatan/calendarkegiatan/events', // Route to fetch events data
                    method: 'GET',
                    failure: function() {
                        alert('Failed to load events.');
                    },
                    color: '#A28989', // a non-ajax option
                    textColor: 'black' // a non-ajax option
                },
                dateClick: function(info) {
                    checkForEvent(info.dateStr, function(hasEvent) {
                        if (!hasEvent) {
                            window.location.href = '{{ route('admin.gallery.create') }}?date=' +
                                info.dateStr;
                        } else {
                            window.location.href = '{{ route('admin.gallery.create') }}?date=' +
                                info.dateStr;
                        }
                    });
                }
            });

            calendar.render();
        });

        function checkForEvent(date, callback) {
            // Kirim permintaan Ajax untuk memeriksa apakah ada acara pada tanggal tertentu
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'http://127.0.0.1:8000/admin/kegiatan/calendarkegiatan/check-event/' + date, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    callback(response.hasEvent);
                } else {
                    console.error('Request failed. Status: ' + xhr.status);
                }
            };
            xhr.onerror = function() {
                console.error('Request failed. Status: ' + xhr.status);
            };
            xhr.send();
        }
    </script>

@endsection
