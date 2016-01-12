var base_url = '/admin/api/teacher/'
var api={
  list: base_url+'teachers?page=',
  new: base_url+'',
  show: base_url+'show?wid=',
  delete: base_url+'destroy?wid=',
  get_cover: base_url+'getCover?wid='
}
var theApp = 'teacherApp';
var theController = 'teacherCtrl';
