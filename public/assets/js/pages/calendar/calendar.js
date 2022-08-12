'use strict';
$('#calendar').fullCalendar({
	header: { left: 'prev', center: 'title', right: 'next' },
	defaultDate: '2018-12-12',
	editable: true,
	droppable: true,
	drop: function () {
		if ($('#drop-remove').is(':checked')) {
			$(this).remove();
		}
	},
	eventLimit: true,
	events: [
		{
			title: 'All Day Event',
			start: '2018-11-01',
			className: 'b-l b-2x b-greensea',
		},
		{
			title: 'Long Event',
			start: '2018-12-07',
			end: '2018-12-10',
			className: 'bg-cyan',
		},
		{
			id: 999,
			title: 'Repeating Event',
			start: '2018-12-09T16:00:00',
			className: 'b-l b-2x b-lightred',
		},
		{
			id: 999,
			title: 'Repeating Event',
			start: '2018-12-16T16:00:00',
			className: 'b-l b-2x b-success',
		},
		{
			title: 'Conference',
			start: '2018-12-11',
			end: '2018-12-13',
			className: 'b-l b-2x b-primary',
		},
		{
			title: 'Meeting',
			start: '2018-12-12T10:30:00',
			end: '2018-12-12T12:30:00',
			className: 'b-l b-2x b-amethyst',
		},
		{
			title: 'Lunch',
			start: '2018-12-12T12:00:00',
			className: 'b-l b-2x b-primary',
		},
		{
			title: 'Meeting',
			start: '2018-12-12T14:30:00',
			className: 'b-l b-2x b-drank',
		},
		{
			title: 'Happy Hour',
			start: '2018-12-12T17:30:00',
			className: 'b-l b-2x b-lightred',
		},
		{
			title: 'Dinner',
			start: '2018-12-12T20:00:00',
			className: 'b-l b-2x b-amethyst',
		},
		{
			title: 'Birthday Party',
			start: '2018-12-13T07:00:00',
			className: 'b-l b-2x b-primary',
		},
		{
			title: 'Click for Google',
			url: 'http://google.com/',
			start: '2018-12-28',
			className: 'b-l b-2x b-greensea',
		},
	],
});
$('#cal-prev').click(function () {
	$('#calendar').fullCalendar('prev');
});
$('#cal-next').click(function () {
	$('#calendar').fullCalendar('next');
});
$('#change-view-month').click(function () {
	$('#calendar').fullCalendar('changeView', 'month');
	$('#content .main').fadeOut(0, function () {
		setTimeout(function () {
			$('#content .main').css({ display: 'table' });
		}, 0);
	});
});
$('#change-view-week').click(function () {
	$('#calendar').fullCalendar('changeView', 'agendaWeek');
	$('#content .main').fadeOut(0, function () {
		setTimeout(function () {
			$('#content .main').css({ display: 'table' });
		}, 0);
	});
});
$('#change-view-day').click(function () {
	$('#calendar').fullCalendar('changeView', 'agendaDay');
	$('#content .main').fadeOut(0, function () {
		setTimeout(function () {
			$('#content .main').css({ display: 'table' });
		}, 0);
	});
});
$('#change-view-today').click(function () {
	$('#calendar').fullCalendar('today');
});
$('#external-events .event-control').each(function () {
	$(this).data('event', { title: $.trim($(this).text()), stick: true });
	$(this).draggable({ zIndex: 999, revert: true, revertDuration: 0 });
});
$('#external-events .event-control .event-remove').on('click', function () {
	$(this).parent().remove();
});
$('#add-event').submit(function (e) {
	e.preventDefault();
	var form = $(this);
	var newEvent = $(
		'<div class="event-control p-10 mb-10">' +
			$('#event-title').val() +
			'<a class="pull-right text-muted event-remove"><i class="fa fa-trash-o"></i></a></div>'
	);
	$('#external-events .event-control:last').after(newEvent);
	$('#external-events .event-control').each(function () {
		$(this).data('event', { title: $.trim($(this).text()), stick: true });
		$(this).draggable({ zIndex: 999, revert: true, revertDuration: 0 });
	});
	$('#external-events .event-control .event-remove').on('click', function () {
		$(this).parent().remove();
	});
	form[0].reset();
	$('#cal-new-event').modal('hide');
});
