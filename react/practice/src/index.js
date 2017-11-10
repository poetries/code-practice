import React from 'react';
import ReactDOM from 'react-dom';
import './index.css';
import App from './App';
import registerServiceWorker from './registerServiceWorker';
import darkBaseTheme from 'material-ui/styles/baseThemes/darkBaseTheme';
import MuiThemeProvider from 'material-ui/styles/MuiThemeProvider';
import getMuiTheme from 'material-ui/styles/getMuiTheme';
import AppBar from 'material-ui/AppBar';
import Avatar from 'material-ui/Avatar';
import  * as ui  from './MyAwesomeReactComponent';
import {cyan500} from 'material-ui/styles/colors';


const muiTheme = getMuiTheme({
    palette: {
      textColor: cyan500,
    },
    appBar: {
      height: 80,
    },
  });
  
 

const Materil = () => (
    <MuiThemeProvider  muiTheme={muiTheme}>
      <App />
      <AppBar title="My AppBar" />
      <Avatar title="My AppBar" />
      <ui.StylesOverridingInlineExample />
      <ui.AppBarExampleIcon />
      <ui.AppBarExampleIconButton />
      <ui.AutoCompleteExampleSimple />
      <ui.AutoCompleteExampleDataSource />
      <ui.AutoCompleteExampleFilters />
      <ui.AvatarExampleSimple />
      <ui.BottomNavigationExampleSimple />
      <ui.BadgeExampleSimple />
      <ui.BadgeExampleContent />
      <ui.FlatButtonExampleSimple />
      <ui.FlatButtonExampleComplex />
      <ui.FlatButtonExampleIcon />
      <ui.RaisedButtonExampleSimple />
      <ui.CardExampleControlled />
      <ui.DatePickerExampleSimple />
      <ui.DialogExampleDialogDatePicker />
      <ui.DividerExampleForm />
      <ui.DrawerUndockedExample />
      <ui.GridListExampleSingleLine />
      <ui.PaperExampleCircle />
      <ui.CircularProgressExampleSimple />
      <ui.SliderExampleSimple />
      <ui.TableExampleControlled />
      <ui.TabsExampleIconText />
    
    </MuiThemeProvider>
  );



ReactDOM.render(<Materil />, document.getElementById('root'));
registerServiceWorker();
